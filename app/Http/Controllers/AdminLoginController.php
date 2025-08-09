<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AdminLogin()
    {
        return view("admin/AdminLogin");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AdminLogin_create(Request $request)
    {
         $user = $request->validate([
            
            'name' => 'required',
            'password' => 'required'
        ]);
        $admin = AdminLogin::create([
            'name'=> $request->name,
            'password' => Hash::make($request->password),
        ]);
         
         Auth::guard('admin')->login($admin);
        return view('admin/admin2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AdminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        return view("admin/AdminLogin");
    }

    /**
     * Display the login page.
     */
    public function Login()
    {
        return view("admin/Login");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function LoginCreate(Request $request)
    {
        $user = $request->validate([
            
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['name'=>$request->name, 'password'=>$request->password ])){

                return view('admin/admin2');
        }
        return view("admin/AdminLogin");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminLogin $admin_Login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminLogin $admin_Login)
    {
        //
    }
}
