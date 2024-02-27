<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Package;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::count();
        $super_admin = User::where('role', 'SUPER_ADMIN')->count();
        $admin = User::where('role', 'ADMIN')->count();
        $package = Package::count();
        $category = Category::count();
        $menu = Menu::count();

        $packages = Package::orderBy('created_at', 'DESC')->limit(3)->get();
        $users = User::orderBy('created_at', 'DESC')->limit(3)->get();

        $categories = Category::with(['user'])->orderBy('created_at', 'DESC')->limit(3)->get();
        $menus = Menu::with(['category'])->orderBy('created_at', 'DESC')->limit(3)->get();

        $questions = Question::orderBy('created_at', 'DESC')->limit(5)->get();

        return view('pages.dashboard.dashboard', compact(
            'user',
            'super_admin',
            'admin',
            'package',
            'category',
            'menu',
            'packages',
            'users',
            'categories',
            'menus',
            'questions'
        ));
    }
}
