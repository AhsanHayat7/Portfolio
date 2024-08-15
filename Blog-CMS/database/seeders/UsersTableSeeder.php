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


        $users = [
            [
                'name' => 'lala',
                'email' => 'lala@ok.me',
                'password' => 'password',
                'admin' => 1
            ],

            [
                'name' => 'baby',
                'email' => 'baby@ok.me',
                'password' => 'password',
                'admin' => 0
            ],

        ];

        foreach($users as $user){
        $user = User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make('password'),
            'admin' => $user['admin']

        ]);
}


        // Profile::create([
        //     'user_id' => $user->id,
        //     'avatar' => 'uploads/avatar/lala.png',
        //     'about' => "The first is to start by writing a few words showing what your blog is about. This will help explain your message to potential readers.",
        //     'facebook' => 'facebook.com',
        //     'Youtube' => 'youtube.com'

        // ]);


        $profiles = [
            [
                'user_id' => 1,
                'avatar' => 'uploads/avatar/lala.png',
                'about' => "The first is to start by writing a few words showing what your blog is about. This will help explain your message to potential readers.",
                'facebook' => 'facebook.com',
                'Youtube' => 'youtube.com'
            ],
            [
                'user_id' => 2,
                'avatar' => 'uploads/avatar/lala.png',
                'about' => "The first is to start by writing a few words showing what your blog is about. This will help explain your message to potential readers.",
                'facebook' => 'facebook.com',
                'Youtube' => 'youtube.com'
            ],
            [
                'user_id' => 3,
                'avatar' => 'uploads/avatar/lala.png',
                'about' => "The first is to start by writing a few words showing what your blog is about. This will help explain your message to potential readers.",
                'facebook' => 'facebook.com',
                'Youtube' => 'youtube.com'
            ],

        ];

        foreach ($profiles as $profile) {
            Profile::create([
                'user_id' => $profile['user_id'],
                'avatar' => $profile['avatar'],
                'about' => $profile['about'],
                'facebook' => $profile['facebook'],
                'Youtube' => $profile['Youtube'],

            ]);
        }
    }
}
