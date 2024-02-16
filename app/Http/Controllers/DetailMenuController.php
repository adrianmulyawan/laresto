<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailMenuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $slug)
    {
        return view('pages.detail-menu');
    }
}
