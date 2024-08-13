<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use PhpParser\Node\Stmt\Catch_;

class FrontEndController extends Controller
{
    //

    public function index(){
        $title  = Setting::first()->site_name;
        $categories = Category::take(5)->get();
        $first_post = Post::orderBy("created_at","desc")->first();
        $second_post = Post::orderBy("created_at","desc")->skip(1)->take(1)->get()->first();
        $third_post = Post::orderBy("created_at","desc")->skip(2)->take(1)->get()->first();
        $career = Category::find(13);
        $tutorials = Category::find(11);
        $settings = Setting::first();

        return view("index",compact("title","categories","first_post","second_post","third_post","career","tutorials","career","tutorials","settings"));;

}


public function  singlepost($slug){

    $post = Post::where('slug', $slug)->first();
    $title = $post->title;
    $categories = Category::take(5)->get();
    $settings = Setting::first();
    $next_id = Post::where('id','>', $post->id)->min('id');
    $prev_id = Post::where('id','<',$post->id)->max('id');
    $next = Post::find($next_id);
    $prev = Post::find($prev_id);
    $tags =Tag::all();
    return view('single',compact('post','title','categories','settings','next','prev','tags'));
}

public function  category($id)
{
    $category = Category::find($id);
    $title = $category->name;
    $categories = Category::take(5)->get();
    $settings = Setting::first();
    return view('category',compact('category','title','categories','settings'));
}

}
