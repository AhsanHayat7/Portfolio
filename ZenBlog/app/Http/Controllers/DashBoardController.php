<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Http\Request;


class DashBoardController extends Controller
{
    //

    public function home(){
        return view("dashboard.index");
    }


    public function table(Request $request){
        $search = $request->input('search', '');
        $articlesNames = Articles::distinct()->pluck('title')->toArray();

        // Query builder instance for pagination
        $articlesQuery = Articles::query();

        if ($search != "") {
            $articlesQuery->where('title', 'LIKE', "%$search%");
        }

        $articles = $articlesQuery->paginate(5);
        return view("dashboard.basic-table",compact('articles','search','articlesNames'));
    }



}
