<?php

namespace App\Http\Controllers;

use App\Models\UploadFileAdmin;
use Illuminate\Http\Request;

class UploadFileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $upload = UploadFileAdmin::get();
        return view('admin/upload/upload',compact('upload'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/upload/file_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filePath = $request->file('path')->store('uploads');

        
        $top = new UploadFileAdmin;
        $top -> course_id= $request->courseId;
        $top -> filename= $request->filename;
         $top->path = $filePath;

        $top->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(UploadFileAdmin $uploadFileAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = UploadFileAdmin::find($id);

        return view('admin/upload/editFile', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $object = UploadFileAdmin::find($id);

        $object -> course_id= $request->course_id;
        $object -> filename	= $request->filename;
        $object -> path	= $request->path;
        $object->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $object = UploadFileAdmin::find($id);
        $object->delete();
        return redirect()->back();
    }
}
