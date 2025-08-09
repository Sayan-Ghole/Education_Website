<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class CourseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Admin::get();
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
        $request->validate([
            'courseName' => 'required',
            'courseDescription' => 'required',
        ]);

        Admin::create([
            'title' => $request->courseName,
            'description' => $request->courseDescription,
        ]);

            return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id){
    $courseAdmin = Admin::find($id);
    return view('admin/course/show_data', compact('courseAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Admin::find($id);

        return view('admin/course/edit_data', compact('edit'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $object = Admin::find($id);

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
        $object = Admin::find($id);
        $object->delete();
        return redirect()->back();
        }
}
