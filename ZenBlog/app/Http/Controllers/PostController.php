<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        return view("dashboard.addpost");
    }

    public function pos(Request $request)
    {
        $request->validate([
            "title" => "required|string|max:255",
            "content" => "required|string",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "author" => "required|string|max:255",
            "category_id" => "required|integer",
            "formatted_date" => "required", // Ensure input format is day-month-year
        ]);

        // Handle file upload
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $filename = rand(11111, 99999) . time() . '.' . $file->getClientOriginalName();
            $imagepath = "uploads/";
            $file->move(public_path($imagepath), $filename);
        } else {
            return redirect()->back()->withErrors(['image' => 'Image file is required.'])->withInput();
        }






        // Create new article instance
        $article = new Articles;
        $article->title = $request->input("title");
        $article->content = $request->input("content");
        $article->author = $request->input("author");
        $article->formatted_date = $request->input('formatted_date');
        $article->category_id = $request->input("category_id");
        $article->image = $imagepath . $filename;
        $article->save();

        // Redirect with success message
        return redirect()->route("table")->with("success", "Post Added Successfully");
    }


    public function update($id){
        $article = Articles::find($id);
        return view('dashboard.addpost',compact('article'));

    }

    public function delete($id){
        $article = Articles::find($id)->delete();
        return  redirect()->route('table')->with("success","Post Deleted Sucessfully");

    }
}
