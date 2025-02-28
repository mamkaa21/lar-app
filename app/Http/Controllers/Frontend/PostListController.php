<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostListController extends Controller
{
    public function index()
    {
//        $posts = Posts::simplePaginate(5);
////        $categories = Category::all();
        $posts = Post::with('tags')->addSelect(
            [
                'category_name' => Category::select('title')
                    ->whereColumn('category_id', 'categories.id'),
                'category_slug' => Category::select('slug')
                    ->whereColumn('category_id', 'categories.id'),
                'tags' => Category::select('slug')
                    ->whereColumn('category_id', 'categories.id'),
            ]
        )->latest()->paginate(15);
        return view('frontend.posts', compact('posts'));
    }
}
