<?php

namespace App\Http\Controllers;

use App\Models\CourseAdmin;
use Illuminate\Http\Request;

class CourseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = CourseAdmin::get();
        return view('admin/course/course_show',compact('course'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        $course = new CourseAdmin;
        $course -> title= $request->courseName;
        $course -> description	= $request->courseDescription	;
        $course->save();

            return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id){
    $courseAdmin = CourseAdmin::find($id);
    return view('admin/course/show_data', compact('courseAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = CourseAdmin::find($id);

        return view('admin/course/edit_data', compact('edit'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $object = CourseAdmin::find($id);

        $object -> title= $request->courseName;
        $object -> description	= $request->courseDescription	;
        $object->update();

            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {       
        $object = CourseAdmin::find($id);
        $object->delete();
        return redirect()->back();
        }
}
