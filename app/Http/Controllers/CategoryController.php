<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        $Posts = Category::all();
        return response()->json($Posts);
    }
    public function show($id)
    {
        $Post = Category::find($id);
        return response()->json($Post);
    }
    // public function create(Request $request)
    // {
    //     $Post = new Post;
    //     $Post->name = $request->name;
    //     $Post->price = $request->price;
    //     $Post->description = $request->description;

    //     $Post->save();
    //     return response()->json($Post);
    // }
    // public function update(Request $request, $id)
    // {
    //     $Post = Post::find($id);

    //     $Post->name = $request->input('name');
    //     $Post->price = $request->input('price');
    //     $Post->description = $request->input('description');
    //     $Post->save();
    //     return response()->json($Post);
    // }

    // public function destroy($id)
    // {
    //     $Post = Post::find($id);
    //     $Post->delete();
    //     return response()->json('Post removed successfully');
    // }
}
