<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    //

    public function faceredirect(){
        return  Socialite::driver('facebook')->redirect();
    }

    public function facecallback(){
        try {
            $facebook_user = Socialite::driver('facebook')->user();

            $user = User::where('facebook_id',$facebook_user->getID())->first();
            if(!$user){
                $new_user = User::create([
                    'name'=> $facebook_user->getName(),
                    'email'=>$facebook_user->getEmail(),
                    'facebook_id'=>$facebook_user->getID(),
                ]);
                Auth::login($new_user);
                return redirect()->intended('home');
            }else{
                Auth::login($user);
                return redirect()->intended('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd('something went wrong!'.$th->getMessage());
        }
    }
}
