<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submit_course;
use App\Models\Submit_topic;
use App\Models\Upload_file;

class SubmitCourse extends Controller
{
        public function index(){
            return view("public.submit.submit_course");
        }

        public function submit(Request $req){
            $submit = new Submit_course;
            
            $submit->id=$req['id'];
            $submit->course_title=$req['course_title'];
            $submit->course_description=$req['course_description'];
            $submit->save();
                
            return redirect('register/success');
        }

        public function submit2(Request $re){
            $submit2 = new Submit_topic;

            $submit2->course_id= $re['course_id'];
            $submit2->topic_title= $re['topic_title'];
            $submit2->topic_description= $re['topic_description'];
            $submit2->save();
            return redirect('register/success');
        }

        public function submit3(Request $r){

            
            $submit3 = new Upload_file;
            
            $submit3->topic_id = $r['topic_id'];
            $submit3->file_title= $r['file_title'];
            $submit3->uploaded_file= $r['uploaded_file'];
            $submit3->save();
            return redirect('register/success');
        }
};
