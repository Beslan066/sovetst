<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        $categories = Category::query()->withCount('posts')->get();

        $mainPosts = Post::query()->where('main_material', 1)->with('category')->take(3)->get();
        $posts = Post::query()->with('category')->paginate(10);

        $popularPosts = Post::query()->with('category')->orderBy('views', 'DESC')->take(5)->get();

        return view('home', [
            'posts' => $posts,
            'mainPosts' => $mainPosts,
            'categories' => $categories,
            'popularPosts' => $popularPosts,
        ]);
    }


    public function news()
    {


        $categories = Category::query()->withCount('posts')->get();

        $posts = Post::query()->with('category')->paginate(10);
        $popularPosts = Post::query()->with('category')->orderBy('views', 'DESC')->take(5)->get();

        return view('news', [
            'popularPosts' => $popularPosts,
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }

    public function single(Post $post) {



        $categories = Category::query()->withCount('posts')->get();

        $popularPosts = Post::query()->with('category')->orderBy('views', 'DESC')->take(5)->get();

        return view('single', [
            'post' => $post,
            'categories' => $categories,
            'popularPosts' => $popularPosts,
        ]);

    }

    public function team()
    {
        return view('team');
    }

    public function presidiumTeam()
    {
        return view('presidium-team');
    }

    public function documents()
    {
        return view('documents');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
