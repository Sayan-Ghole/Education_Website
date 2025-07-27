<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log_in;


class login extends Controller
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

    // public function show3_admin_update($id){
    //     $manage = Log_in::find($id);
    //     $data = compact('manage');
    //     return view("admin/update")->with($data);
    // }

    public function login(Request $re){
        $login = new Log_in;
        $login->name =$re['name'];
        $login->password =$re['password'];
        $login->save();
    
        // return redirect("/manager");

    if ($re->input('redirect_to') === 'admin') {
        return redirect('/admin');
    } 
    else {
        return redirect('/manager');
    }
    
    
    }
    
    public function show5(){
        $login = Log_in::all();
        $data = compact('login');

        return view('admin/login_show')->with($data);
    }

    public function delete($id){
        Log_in::find($id)->delete();
        return redirect("/login2");
    }

    public function edit($id){
        $edit =Log_in::find($id);
        if(is_null($edit)){
           return redirect("/login2"); 
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
        $submit =Log_in::find($id);
        $submit->name =$re['name'];
        $submit->password =$re['password'];
        $submit->save();

        return redirect('/login2');
        
    }
}
