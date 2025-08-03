<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Submit_course;
use App\Models\Submit_topic;
use App\Models\Upload_file;

class register extends Controller
{
    public function index2(){
            return view("public.register");
        }

    public function register(Request $req){
            //insert into database
            $registration = new Registration;
            $registration->name =$req['name'];
            $registration->email =$req['email'];
            $registration->password =md5($req['password']);
            $registration->save();

            return redirect('/');

        }
    public function view(){
        $reg = Registration::paginate(8);
        $data = compact('reg'); 
        return view('manager/registration2')->with($data);
    }
    public function success(){
        return view("public.success");
    }
    public function view2(){
        $sub_c = Submit_course::all();
        $sub_t = Submit_topic::all();
        $upload = Upload_file::all();
        
        $data = compact('sub_c','sub_t','upload');

        return view('manager/submition2')->with($data);
    }
    public function admin_sub_view(){

        $sub_c = Submit_course::all();
        $sub_t = Submit_topic::all();
        $upload = Upload_file::all();
        
        $data = compact('sub_c','sub_t','upload');

        return view('admin/submit_view')->with($data);
    }

    public function admin_sub_delete($id){

        $idc = Submit_course::find($id);
        $idc->delete();
        return redirect()->back();

        

    }
    public function admin_sub_delete2($id){

        $idc = Submit_topic::find($id);
        $idc->delete();
        return redirect()->back();

        

    }
    public function admin_sub_delete3($id){

        $idc = Upload_file::find($id);
        $idc->delete();
        return redirect()->back();

        

    }

    public function approveC($id,$title,$des,Request $request){
        $from = $request->query('from');
        // return redirect('course.create',compact('id','title','des'));
        return redirect()->route('course.create', [
            'title' => $title,
            'des' => $des,
            'from' => $from
        ]);

    }
    public function approveT($id,$title,$des,Request $request){
        // return redirect('course.create',compact('id','title','des'));
         $from = $request->query('from');
        return redirect()->route('topic.create', [
            'id' => $id,
            'title' => $title,
            'des' => $des,
            'from' => $from
        ]);

    }
    public function approveF($id,$title,Request $request){
        // return redirect('course.create',compact('id','title','des'));
        $from = $request->query('from');
        return redirect()->route('upload.create', [
            'id' => $id,
            'title' => $title,
            'from' => $from
        ]);

    }
}
