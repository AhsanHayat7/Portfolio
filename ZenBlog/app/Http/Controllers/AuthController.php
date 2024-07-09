<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function log(){
        return view("frontend.ZenBlog.login");
}
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            'password' => "required",
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }

        return redirect('login')->withErrors([
            'error' => 'Invalid login details',
        ]);
}

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed",
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => \Hash::make($request->password)
        ]);

        if ($user) {
            Auth::login($user);
            return redirect("/");
        }

        return redirect("register")->withErrors([
            'error' => 'Failed to create user',
        ]);
    }



    public function reg(){
        return view("frontend.ZenBlog.register");
    }


        public function logout(Request $request)
        {
            Auth::logout();                     // Logout the user
            $request->session()->invalidate();  // Invalidate the current session
            $request->session()->regenerateToken(); // Regenerate the CSRF token

            return redirect('/');               // Redirect to the homepage or any desired URL after logout
        }
}
