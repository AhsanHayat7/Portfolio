<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Post::create([
            "title"=> "Laravel",
            "slug"=> "laravel",
            "content"=>"Happy independence day",
            "category_id"=> 8,
            "featured"=>"1722495173Cat03.jpg",
            "user_id"=> 1,
        ]);
    }
}
