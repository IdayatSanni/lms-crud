<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;  // Use singular 'Course' here

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all courses and pass them to the view
        return view('courses.index', ['courses' => Course::all()]);  // Use 'Course' instead of 'Courses'
    }

    /**
     * Show a list of trashed (soft-deleted) courses.
     */
    public function trashed()
    {
        // Fetch only soft-deleted courses and pass them to the view
        $courses = Course::onlyTrashed()->get();  // Use 'Course' instead of 'Courses'
        return view('courses.trashed', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)  // Use 'StoreCourseRequest' (singular)
    {
        // Create a new course with validated data
        Course::create($request->validated());
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)  // Use 'Course' instead of 'Courses'
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)  // Use 'Course' instead of 'Courses'
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)  // Use 'UpdateCourseRequest' (singular)
    {
        // Update the course with validated data
        $course->update($request->validated());
        return redirect()->route('courses.index');
    }

    /**
     * Soft delete a course by id.
     */
    public function trash($id)
    {
        $course = Course::find($id);  // Find course by ID
        if ($course) {
            $course->delete();  // Soft delete the course
        }
        return redirect()->route('courses.index');
    }

    /**
     * Permanently delete the specified course.
     */
    public function destroy($id)
    {
        $course = Course::withTrashed()->where('id', $id)->first();  // Get the course, even if soft-deleted
        if ($course) {
            $course->forceDelete();  // Permanently delete the course
        }
        return redirect()->route('courses.trashed');
    }

    /**
     * Restore a soft-deleted course.
     */
    public function restore($id)
    {
        $course = Course::withTrashed()->where('id', $id)->first();  // Get the soft-deleted course
        if ($course) {
            $course->restore();  // Restore the soft-deleted course
        }
        return redirect()->route('courses.trashed');
    }
}
