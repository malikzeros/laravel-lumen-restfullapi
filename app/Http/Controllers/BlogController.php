<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
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
    public function categories()
    {
        $Categories = Category::all();
        return response()->json($Categories);
    }
    public function category($category_name)
    {
        $Categorie = Category::where('category_name', $category_name)->get();
        $array=$Categorie->toArray();
        $Posts = Post::where('post_category_id', $array[0]['category_id'])->get();
        return response()->json($Posts);
    }
    public function articles()
    {
        $Posts = Post::all();
        return response()->json($Posts);
    }
    public function article($post_title)
    {
        $post_title=str_replace('%20',' ',$post_title);
        $Post = Post::where('post_title', $post_title)->get();
        return response()->json($Post);
    }
}
