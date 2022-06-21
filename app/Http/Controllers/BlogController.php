<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;


class BlogController extends Controller
{
    public  function index()
    {
        return view('blogs.index', [
            "randomBlogs" => Blog::inRandomOrder()->take(1)->get(),
            'blogs' => Blog::filter(request(['search', 'category', 'author']))->latest()
                ->Paginate(2)
                ->withQueryString()
        ]);
    }
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog,
            "ramdomBlog" => Blog::inRandomOrder()->take(3)->get(),
            'comments' => Comment::latest()
                ->Paginate(3)
        ]);
    }
    public function services()
    {
        return view('showservices');
    }
    public function like(Blog $blog)
    {

        if (User::find(auth()->id())->isLiked($blog)) {
            $blog->unLike();
        } else {
            $blog->like();
        }
        return redirect()->back();
    }
}
