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

        $posts = [
            [
            "title"=> "Laravel",
            "slug"=> "laravel",
            "content"=>"Happy independence day",
            "category_id"=> 1,
            "featured"=>"uploads/posts/1722495173Cat03.jpg",
            "user_id"=> 1,
        ],
        [
        "title"=> "Laravel",
        "slug"=> "laravel",
        "content"=>"Happy independence day",
        "category_id"=> 2,
        "featured"=>"uploads/posts/1722495173Cat03.jpg",
        "user_id"=> 2,
    ],

        ];


        foreach($posts as $post){
        Post::create([
            "title"=> $post["title"],
            "slug"=> $post["slug"],
            "content"=>$post["content"],
            "category_id"=> $post["category_id"],
            "featured"=>$post["featured"],
            "user_id"=> $post["user_id"],
        ]);

}
    }
}
