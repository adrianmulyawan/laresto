<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPackageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.detail-package');
    }
}
