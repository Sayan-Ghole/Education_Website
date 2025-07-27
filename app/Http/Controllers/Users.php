<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseAdmin;
use App\Models\TopicAdmin;
use App\Models\UploadFileAdmin;
use Illuminate\Support\Facades\Storage;

class Users extends Controller
{
    public function courseView(){
        $courses = CourseAdmin::get();
        return view('public/course',compact("courses"));

    }
    

 public function showTopics($id)
    {
        $courses = CourseAdmin::find($id);
        $topics = TopicAdmin::where('course_id', $id)->get(); // get topics by course_id

        return view('public.topic', compact('courses', 'topics'));
    }

    public function showFiles(){

        $file = UploadFileAdmin::get();

        return view('public/showFile',compact('file'));
    }

    // public function downloadFile($id){

    //     $path = UploadFileAdmin::find($id);

    //     return response()->download($path);
       
    // }

    public function downloadFile($id){
    $file = UploadFileAdmin ::findOrFail($id); 
    $path = $file->path; // Example: 'uploads/myfile.pdf'

    if (Storage::exists($path)) {
        return Storage::download($path);
    } else {
        echo('File not found.');
    }
}

}
