<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\register;
use App\Http\Controllers\SubmitCourse;
use App\Models\Registration;
use App\Http\Controllers\manager;
use App\Http\Controllers\admin;
use App\Http\Controllers\login;
use App\Models\CourseAdmin;

use App\Http\Controllers\CourseAdminController;
use App\Http\Controllers\TopicAdminController;
use App\Http\Controllers\UploadFileAdminController;

use App\Http\Controllers\user;
use App\Http\Controllers\Users;
use App\Models\User as ModelsUser;

// //pest code
// use Illuminate\Support\Facades\Storage;
// use App\Models\UploadFileAdmin;

// Route::get('/', function () {
//     return view('welcome');
// });

Route :: get('/',function(){
    return view("public.page");
});

Route ::get('/submit',[SubmitCourse::class,"index"]);
Route ::post('/submit',[SubmitCourse::class,"submit"]);

Route ::get('/submit2',[SubmitCourse::class,"index"]);
Route ::post('/submit2',[SubmitCourse::class,"submit2"]);

Route ::get('/submit3',[SubmitCourse::class,"index"]);
Route ::post('/submit3',[SubmitCourse::class,"submit3"]);

Route ::get('/register',[register::class,"index2"]);
Route ::get('/register/success',[register::class,"success"]);
Route ::post('/register',[register::class,"register"]);

Route ::get('/manager',[manager::class,"show"]);
Route ::get('/view',[register::class,"view"]);
Route ::get('/view2',[register::class,"view2"]);

Route ::get('/admin',[admin::class,"show2"]);

Route ::get('/login',[login::class,"show3"]);
Route ::post('/login',[login::class,"login"]);

Route ::get('/login_admin',[login::class,"show3_admin"]);
Route ::post('/login_admin',[login::class,"login"]);

Route ::get('/login2',[login::class,"show5"]);

Route ::get('/login2/delete/{id}',[login::class,"delete"]);
Route ::get('/login2/edit/{id}',[login::class,"edit"]);
Route ::post('/login2/submit/{id}',[login::class,"submit"]);

Route ::get('/admin_sub_view',[register::class,"admin_sub_view"]);
Route ::get('/admin_sub_delete/{id}',[register::class,"admin_sub_delete"]);//.........
Route ::get('/admin_sub_delete2/{id}',[register::class,"admin_sub_delete2"]);//.........
Route ::get('/admin_sub_delete3/{id}',[register::class,"admin_sub_delete3"]);//.........



Route::get('/admin_sub_approve/{id}/{title}/{des}',[register::class,"approveC"]);
Route::get('/admin_sub_approveT/{id}/{title}/{des}',[register::class,"approveT"]);
Route::get('/admin_sub_approveF/{id}/{title}',[register::class,"approveF"]);


Route ::get("/registration",function(){
        $registration = Registration::all();
        echo "<pre>";
        print_r($registration -> toArray());
});

// Route::resource('/course',CourseAdminController::class);
Route::resource('course', CourseAdminController::class);

Route::resource('topic', TopicAdminController::class);
Route::resource('upload', UploadFileAdminController::class);


Route::get('/user',[Users::class,"courseView"]);
Route::get('/user/courses/{id}/topics', [Users::class, 'showTopics']);

Route::get('/user/files',[Users::class,"showFiles"]);
Route::get('/user/download/{id}', [Users::class, 'downloadFile']);



