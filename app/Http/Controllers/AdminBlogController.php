<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index', [
            "blogs" => Blog::latest()->paginate(5)
        ]);
    }

    public function create()
    {

        return view('admin.blogs.create', [
            'categories' => Category::all()
        ]);
    }
    public function store(Blog $blog)
    {

        $formData = request()->validate([
            "title" => ['required'],
            "slug" => ['required', Rule::unique('blogs', 'slug')],
            "intro" => ['required'],
            "body" => ['required'],
            "category_id" => ['required', Rule::exists('categories', 'id')]
        ]);
        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] =  request()->file('thumbnail') ? request()->file('thumbnail')->store('thumbnail') : $blog->thumbnail;

        Blog::create($formData);

        return redirect('/');
    }
    public function destory(Blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }
    public function update(Blog $blog)
    {
        $formData = request()->validate([
            "title" => ['required'],
            "slug" => ['required', Rule::unique('blogs', 'slug')->ignore($blog->id)],
            "intro" => ['required'],
            "body" => ['required'],
            "category_id" => ['required', Rule::exists('categories', 'id')]
        ]);
        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] =  request()->file('thumbnail') ? request()->file('thumbnail')->store('thumbnail') : $blog->thumbnail;

        $blog->update($formData);

        return redirect('/');
    }
    public function contact()
    {
        return view('admin.blogs.contact', [
            'contacts' => Contact::latest()->paginate(5)
        ]);
    }
}
