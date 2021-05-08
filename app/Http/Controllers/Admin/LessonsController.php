<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLessonRequest;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Lesson;
use App\SchoolClass;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LessonsController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('lesson_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lessons = Lesson::all();

        return view('admin.lessons.index', compact('lessons'));
    }

    public function create()
    {
        // abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classes = SchoolClass::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teachers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.lessons.create', compact('classes', 'teachers'));
    }

    public function store(StoreLessonRequest $request)
    {
        //$lesson = Lesson::create($request->all());


        $startTimes =  $request->input('startTime', []);
        $endTimes =  $request->input('endTime', []);
        $weekdays =  $request->input('weekday', []);
        $class_id =  $request->input('class_id');
        $teacher_id =  $request->input('teacher_id');

        foreach ($startTimes as $index => $startTime) {
            $classTime[] = [
                "teacher_id" => $teacher_id, // change this
                "class_id" => $class_id,
                "weekday" => $weekdays[$index],
                "start_time" => date("H:i:s",strtotime($startTimes[$index])),
                "end_time" => date("H:i:s",strtotime($endTimes[$index])),
            ];
        }


        Lesson::insert($classTime);

        return redirect()->route('admin.lessons.index');
    }

    public function edit(Lesson $lesson)
    {
        // abort_if(Gate::denies('lesson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classes = SchoolClass::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teachers = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $lesson->load('class', 'teacher');

        return view('admin.lessons.edit', compact('classes', 'teachers', 'lesson'));
    }

    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return redirect()->route('admin.lessons.index');
    }

    public function show(Lesson $lesson)
    {
        // abort_if(Gate::denies('lesson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lesson->load('class', 'teacher');

        return view('admin.lessons.show', compact('lesson'));
    }

    public function destroy(Lesson $lesson)
    {
        // abort_if(Gate::denies('lesson_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lesson->delete();

        return back();
    }

    public function massDestroy(MassDestroyLessonRequest $request)
    {
        Lesson::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
