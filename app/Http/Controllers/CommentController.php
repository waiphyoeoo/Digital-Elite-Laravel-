<?php

namespace App\Http\Controllers;

use App\Models\Blog;


class CommentController extends Controller
{
    public function commentstore(Blog $blog)
    {

        request()->validate([
            'body' => ['required', 'min:3']
        ]);

        $blog->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);
        return redirect("/blogs/" . $blog->slug);
    }
}
