<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ManagerLogin;


class Login extends Controller
{
    public function show3(){
        return view("manager/log_in");
    }
    public function show3_admin(){
        $url = url('/login_admin');
        $title = "Login";
        $edit_ = "";
        $pass="";
        $data = compact('url','title','edit_','pass');
        return view("admin/log_in_admin")->with($data);
    }

    

    public function login(Request $re){
        
       $re->validate([
        'userid'=>'required',
        'name' => 'required',
        'password' => 'required'
       ]);
       $manager =ManagerLogin::create([
        'userid'=> $re->userid,
        'name' => $re->name,
        'password' => Hash::make($re->password)
       ]);
        Auth::guard('manager')->login($manager);
        

    if ($re->input('redirect_to') === 'admin') {
        return redirect('/admin_directly');
    } 
    else {
        return redirect('/manager_directly');
    }
    }
    
    public function show5(){
        $login = ManagerLogin::all();
        $data = compact('login');

        return view('admin/login_show')->with($data);
    }

    public function delete($id){
        ManagerLogin::find($id)->delete();
        return redirect()->route('admin_login_show');
    }

    public function edit($id){
        $edit =ManagerLogin::find($id);
        if(is_null($edit)){
           return redirect()->route('admin_login_show'); 
        }
        else{
            $url = ('/login2/submit').'/'.$id;
            $title = "Update";
            $edit_ = $edit->name;
            $pass = $edit->userid;
            $data = compact('edit','url','title','edit_','pass');
            return view('admin/log_in_admin')->with($data);
        }

    }

    public function submit($id,  Request $re){
        $submit =ManagerLogin::find($id);
        $submit->name =$re['name'];
        $submit->password = Hash::make($re['password']);
        $submit->save();

        return redirect()->route('admin_login_show');
        
    }
    public function login2_manager(){
        return view("manager/login2_manager");
    }

    public function login2_manager_create(Request $request){
        $request->validate([
        'userid'=>'required',
        'password' => 'required',
            
        ]);
       if(Auth::guard('manager')->attempt(['userid'=> $request->userid,'password' =>$request->password])) {
            return redirect('/manager_directly');
       }
       echo "not found..";

        
    }

}
