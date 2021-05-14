<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Cms;
use App\Models\ContactUs;
use App\Models\MainServices;
use App\Models\Setting;
use App\Package;

use App\Lesson;
use App\Services\CalendarService;

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
        $weekDays     = Lesson::WEEK_DAYS;
        $calendarService = new CalendarService;
        $calendarData = $calendarService->generateCalendarData($weekDays);
        $blogs = Blog::take(6)->get();
        $cms = Cms::latest()->first();
        $contactus = ContactUs::latest()->first();
        $mainservices = MainServices::all();
        $setting = Setting::first();
        // echo "<pre>";print_r($setting->toArray());exit;
        $packages = Package::latest()->take(3)->get();
        $testimonials = Testimonial::latest()->get();
        // echo "<pre>";print_r($calendarData);"</pre>";exit;
        return view('welcome',compact('testimonials','blogs','packages', 'cms', 'setting', 'calendarData','weekDays','mainservices','contactus'));
    }

    public function blog($id='')
    {
        $blog = Blog::where('id',$id)->first();
       return view('blog',compact('blog'));
    }


    public function indexHome()
    {
        $weekDays     = Lesson::WEEK_DAYS;
        $calendarService = new CalendarService;
        $calendarData = $calendarService->generateCalendarData($weekDays);
        // echo "<pre>";print_r($calendarData);exit;
        $blogs = Blog::take(6)->get();
        $cms = Cms::latest()->first();
        $contactus = ContactUs::latest()->first();
        $mainservices = MainServices::all();
        $setting = Setting::first();
        // echo "<pre>";print_r($setting->toArray());exit;
        $packages = Package::latest()->take(3)->get();
        $testimonials = Testimonial::latest()->get();
        // echo "<pre>";print_r(compact('calendarData'));"</pre>";exit;
        return view('welcome_index',compact('testimonials','blogs','packages', 'cms', 'setting', 'calendarData','weekDays','mainservices','contactus'));
    }
}
