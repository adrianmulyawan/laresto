<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DetailBlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $slug)
    {
        $blog = Blog::with(['user'])->where('slug', $slug)->first();

        if (!$blog) {
            Alert::error('Error', 'Blog Tidak Ditemukan!');
            return back();
        }
        return view('pages.detail-blog', compact('blog'));
    }
}
