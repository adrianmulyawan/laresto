<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DetailPackageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $slug)
    {
        $package = Package::where('slug', $slug)->first();

        if (!$package) {
            Alert::error('Error', 'Paket Tidak Ditemukan!');
            return back();
        }

        return view('pages.detail-package', compact('package'));
    }
}
