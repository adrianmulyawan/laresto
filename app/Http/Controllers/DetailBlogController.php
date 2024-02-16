<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.detail-blog');
    }
}
