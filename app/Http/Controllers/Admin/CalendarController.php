<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\Services\CalendarService;

class CalendarController extends Controller
{
    public function index(CalendarService $calendarService)
    {
        $weekDays     = Lesson::WEEK_DAYS;
        $calendarData = $calendarService->generateCalendarData($weekDays);

        echo "<pre>";print_r($calendarData); exit;
        return view('admin.calendar', compact('weekDays', 'calendarData'));
    }
}
