<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Organization;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $banners = Banner::all();
        $organization = Organization::firstOrFail();
        $services = Service::limit(6)->orderBy('created_at', 'DESC')->get();
        $categories = Category::limit(3)->get();
        $clients = Client::limit(4)->get();
        $testimonials = Testimonial::limit(4)->get();
        $faqs = Faq::get();

        return view('pages.home', compact(
            'banners',
            'organization',
            'services',
            'categories',
            'clients',
            'testimonials',
            'faqs'
        ));
    }
}
