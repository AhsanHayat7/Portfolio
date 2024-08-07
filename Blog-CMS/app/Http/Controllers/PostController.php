<?php

namespace App\Http\Controllers;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Str;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $categories = Category::all();
        $tags = Tag::all();
        if($categories->count() == 0|| $tags->count() == 0 ){
            Flasher::addInfo('You must have some categories before attempting to create a post.');
            return redirect()->back();
        }
        return view("admin.post.create",compact("categories","tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request, [
        "title"=> "required|max:255",
        "featured"=> "required|image",
        "content"=>"required",
        "category_id"=>"required",
        "tags"=>"required"
       ]);

     $featured = $request->featured;
     $featured_new_name = time().$featured->getClientOriginalName();

     $featured->move('uploads/posts',$featured_new_name);

     $post =  Post::create([

        'title'=> $request->title,
        'featured'=> 'uploads/posts/' . $featured_new_name,
        'content'=> $request->content,
        'category_id'=> $request->category_id,
        'slug'=> Str::slug($request->title)
     ]);

     $post->tags()->attach($request->tags);
     toastr('Post created Successfully');

     return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $tags = Tag::all();
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            "title"=>"required",
            "content"=>"required",
             "category_id"=> "required",
        ]);

        $post = Post::find($id);
        if($request->hasFile("featured"))
        {

            $featured = $request->featured;

            $featured_new_name = time() .  $featured->getClientOriginalName();

            $featured->move('uploads/posts/',$featured_new_name);

            $post->featured = 'uploads/posts/'. $featured_new_name;

        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags);

        toastr('Post Updated Successfully.');


        return redirect()->route('post');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();


        toastr('The post was just Trashed.');
        return  redirect()->back();
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();

        return view('admin.post.trashed',compact('posts'));
    }

    public function kill($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();


        toastr('Post deleted Permanently.');
        return redirect()->back();
    }


    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();


        toastr('Post Restored.');
        return redirect()->route('post');

    }
}
