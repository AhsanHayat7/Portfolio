<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomController extends Controller
{
    //
    public function dashboard(){
        toastr()->success('You have Successfully login.');
        if(Auth::check()){
        return view("dashboard");
    }

        return redirect()->route('login');
    }


    public function index(){
        return view("login");
    }

    public function customlogin(Request $request){

        $request->validate([
            "email"=> "required",

            "password"=> "required",
        ]);

        $credentials = $request->only("email","password");
         if(Auth::attempt($credentials)){
            toastr()->success('You  has been suspended.');
            return redirect()->route("dashboard");
         }

         return redirect()->route("login")->withErrors(['email' => 'Login details are not valid']);
    }


    public function registration(){
        toastr()->success('You has Successfully login.');

        return view("registration");
}

    public function customRegistration(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6"]);


        $data = $request->all();
        $check = $this->create($data);
        Auth::login($check);
        return redirect()->route("dashboard")->withSuccess("You have Successfully logged-in");

        }

        public function create(array $data) {
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }

        public function signout(){
            Session::flush();
            Auth::logout();
           return redirect()->route("login")->withSuccess('You have been logged out');
        }


}
