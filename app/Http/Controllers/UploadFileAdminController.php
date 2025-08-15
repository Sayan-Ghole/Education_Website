<?php

namespace App\Http\Controllers;

use App\Models\AdminFile;
use Illuminate\Http\Request;

class UploadFileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $upload = AdminFile::get();
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

        
        // $top = new UploadFileAdmin;
        // $top -> course_id= $request->courseId;
        // $top -> filename= $request->filename;
        // $top->path = $filePath;

        // $top->save();

        $request->validate([
            'courseId'=>'required',
            'filename'=>'required',
            'path'=>'required',
            
        ]);
        AdminFile::create([
            "course_id"=> $request->courseId,
            "filename"=>  $request->filename,
            "path" => $filePath,

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminFile $uploadFileAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = AdminFile::find($id);

        return view('admin/upload/editFile', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $filePath = $request->file('path')->store('uploads');
        $object = AdminFile::find($id);

        $object -> course_id= $request->courseId;
        $object -> filename	= $request->filename;
        $object -> path	= $filePath;
        $object->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $object = AdminFile::find($id);
        $object->delete();
        return redirect()->back();
    }
}
