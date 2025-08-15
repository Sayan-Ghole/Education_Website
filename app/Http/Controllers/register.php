<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Course;
use App\Models\Topic;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index2(){
            return view("public.register");
        }

    public function register(Request $req){
            
            $req->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
           $register = Registration::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' =>Hash::make($req->password),
            ]);

        Auth::guard('register')->login($register);
        session()->put('userExist',1);
            return redirect('/');

        }
        //    Auth::login($registration);
        public function user_login_page(){
            return view("public/user_login_page");
        }
        public function user_login_page_create(Request $request){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if(Auth::guard('register')->attempt(['email' =>$request->email,'password'=>$request->password])){
                session()->put('userExist2',1);

                
                return redirect('/');
            }
            return view("public.register");
            
            
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
        $sub_c = Course::all();
        $sub_t = Topic::all();
        $upload = File::all();
        
        $data = compact('sub_c','sub_t','upload');

        return view('manager/submition2')->with($data);
    }
    public function admin_sub_view(){

        $sub_c = Course::all();
        $sub_t = Topic::all();
        $upload = File::all();
        
        $data = compact('sub_c','sub_t','upload');

        return view('admin/submit_view')->with($data);
    }

    public function admin_sub_delete($id){

        $idc = Course::find($id);
        $idc->delete();
        return redirect()->back();

        

    }
    public function admin_sub_delete2($id){

        $idc = Topic::find($id);
        $idc->delete();
        return redirect()->back();
        // echo "$idc";

        

    }
    public function admin_sub_delete3($id){

        $idc = File::find($id);
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

    // for auth..
    public function loginShow_Check(){
        return view('public/loginShow_Check');

    }

    public function loginCheck(Request $request){
        echo "done";
        echo "<pre>";
        echo "$request";

    }

    public function logout(){
         
        Auth::guard('register')->logout();
       session()->forget('userExist');
       session()->forget('userExist2');
        return redirect('/');

    }

    public function logout2(){
    
        Auth::guard('manager')->logout();
        return view("manager/log_in");

    }

    
    

}
