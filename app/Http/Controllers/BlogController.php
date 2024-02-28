<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs = Blog::with(['user'])->paginate(8);
        return view('pages.blog', compact('blogs'));
    }
}
