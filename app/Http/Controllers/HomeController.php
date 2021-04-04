<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Cms;
use App\Package;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      
        $blogs = Blog::take(6)->get();
        $cms = Cms::latest()->first();
        // echo "<pre>";print_r($cms->toArray());exit;
        $packages = Package::latest()->take(3)->get();
        $testimonials = Testimonial::latest()->get();
        return view('welcome',compact('testimonials','blogs','packages', 'cms'));
    }
}
