<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postsListPage()
    {
        return view('front/posts/list');
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->views++;
        $post->save();
        $prev = Post::inRandomOrder()->first();
        $next = Post::inRandomOrder()->first();

        return view('front/posts/single', ['post' => $post, 'prev' => $prev, 'next' => $next]);
    }

    public function postsByCategory($category_slug)
    {
        $_sub_category_filter = null;
        $subcategory = null;
        $category = Category::whereSlug($category_slug)->first();

        if ($category->parent_id != null) {
            $subcategory = $category;
            $category = $category->parent;
            $_sub_category_filter = Category::where('parent_id', $category->id)->get();
        }

        return view('front/posts/by_category', ['category' => $category, 'subcategory' => $subcategory, '_sub_category_filter' => $_sub_category_filter]);
    }
}
