<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZenBlogController extends Controller
{
    //

    public function index(){
        return view("frontend.Zenblog.index");
    }

    public function about(){
        return view("frontend.Zenblog.about");
}


    public function contact(){
        return view("frontend.Zenblog.contact");
}

    public function search(){
        return view("frontend.Zenblog.search-result");


}

    public function category(){
        return view("frontend.Zenblog.category");
    }


    public function single(){

        return view("frontend.Zenblog.single-post");

}

}
