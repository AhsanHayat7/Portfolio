<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = User::create([
            'name'=>'lala',
            'email'=>'lala@ok.me',
            'password'=> Hash::make('password'),
            'admin'=> 1

        ]);


        Profile::create([
            'user_id'=> $user->id,
            'avatar'=>'uploads/avatar/lala.png',
            'about'=>"The first is to start by writing a few words showing what your blog is about. This will help explain your message to potential readers.",
            'facebook'=> 'facebook.com',
            'Youtube' => 'youtube.com'

        ]);
    }
}
