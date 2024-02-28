<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isNull;

class DetailMenuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $slug)
    {
        $items = Category::with('menus')->where('slug', $slug)->first();
        if (!$items) {
            Alert::error('Error', 'Menu Tidak Ditemukan!');
            return redirect()->route('menu');
        } else {
            $foods = $items->menus()->paginate(8);
            // dd($foods);
            return view('pages.detail-menu', compact('foods'));
        }
    }
}
