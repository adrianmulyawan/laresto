<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Gallery;
use App\Models\History;
use App\Models\Organization;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $organization = Organization::firstOrFail();
        $advantages = Advantage::limit(4)->get();
        $histories = History::all();
        $galleries = Gallery::limit(6)->get();

        return view('pages.about', compact(
            'organization',
            'advantages',
            'histories',
            'galleries'
        ));
    }
}
