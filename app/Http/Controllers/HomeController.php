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
use App\Models\PackageTiming;

use App\Lesson;
use App\Services\CalendarService;


use Cache;

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

        

        foreach($calendarData as $key=>$calendar)
        {
            if(($calendar[0]==1) && ($calendar[1]==1)  && ($calendar[2]==1)  && ($calendar[3]==1) && ($calendar[4]==1) && ($calendar[5]==1))
                unset($calendarData[$key]);
        }

        // echo "<pre>";
        // print_r($calendarData); exit;
        
        $blogs = Blog::take(6)->get();
        $cms = Cms::latest()->first();
        $contactus = ContactUs::latest()->first();
        $mainservices = MainServices::all();
        $setting = Setting::first();
        // echo "<pre>";print_r($setting->toArray());exit;
        $packages = Package::latest()->take(3)->get();

        foreach ($packages as $key => $package) {
            $packages[$key]->packageTimings = PackageTiming::where('package_id',$package->id)->get();
        }
        $testimonials = Testimonial::latest()->get();
        // echo "<pre>";print_r($calendarData);"</pre>";exit;
        return view('welcome',compact('testimonials','blogs','packages', 'cms', 'setting', 'calendarData','weekDays','mainservices','contactus'));

    }

    public function blog($id='')
    {
        $blog = Blog::where('id',$id)->first();
       return view('blog',compact('blog'));
    }

}
