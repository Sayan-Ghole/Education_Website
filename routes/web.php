<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Register;
use App\Http\Controllers\SubmitCourse;
use App\Models\Registration;
use App\Http\Controllers\Manager;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Login;
use App\Models\CourseAdmin;

use App\Http\Controllers\CourseAdminController;
use App\Http\Controllers\TopicAdminController;
use App\Http\Controllers\UploadFileAdminController;


use App\Http\Controllers\Users;
use App\Models\User as ModelsUser;

use App\Http\Middleware\AdminGate;
use App\Http\Middleware\ManagerCheck;

use App\Http\Controllers\AdminLoginController;


// //pest code
// use Illuminate\Support\Facades\Storage;
// use App\Models\UploadFileAdmin;

// Route::get('/', function () {
//     return view('welcome');
// });

Route :: get('/',function(){
    return view("public.page");
})->name('Home_page');

Route ::get('/submit',[SubmitCourse::class,"index"])->middleware(AdminGate::class)->name('Submit_page');
Route ::post('/submit',[SubmitCourse::class,"submit"])->middleware(AdminGate::class);

Route ::get('/submit2',[SubmitCourse::class,"index"])->middleware(AdminGate::class)->name('Submit_page');
Route ::post('/submit2',[SubmitCourse::class,"submit2"])->middleware(AdminGate::class);

Route ::get('/submit3',[SubmitCourse::class,"index"])->middleware(AdminGate::class)->name('Submit_page');
Route ::post('/submit3',[SubmitCourse::class,"submit3"])->middleware(AdminGate::class);

Route ::get('/register',[Register::class,"index2"])->name('register');
Route ::get('/register/success',[Register::class,"success"])->name('success_page');
Route ::post('/register',[Register::class,"register"]);

//manager tasks............
Route ::get('/manager',[login::class,"show3"]);
Route ::get('/manager_directly',[Manager::class,"show3"])->name('manager_page');
Route ::get('/view',[Register::class,"view"])->middleware(ManagerCheck::class)->name('registrations');
Route ::get('/view2',[Register::class,"view2"])->middleware(ManagerCheck::class)->name('submissions');

Route ::get('/admin',[AdminLoginController::class,"AdminLogin"]);
//manager login....
Route ::get('/login',[login::class,"show3"])->name('manager_login');
Route ::post('/login',[login::class,"login"]);

Route ::get('/login_admin',[Login::class,"show3_admin"])->name('admin_login');
Route ::post('/login_admin',[Login::class,"login"]);

Route ::get('/login2',[Login::class,"show5"])->name('admin_login_show');

Route ::get('/login2/delete/{id}',[Login::class,"delete"])->name('manager_delete');
Route ::get('/login2/edit/{id}',[Login::class,"edit"])->name('manager_edit');
Route ::post('/login2/submit/{id}',[Login::class,"submit"]);

Route ::get('/admin_sub_view',[Register::class,"admin_sub_view"])->name('all_submission');
Route ::get('/admin_sub_delete/{id}',[Register::class,"admin_sub_delete"])->name('submission_delete_course');
Route ::get('/admin_sub_delete2/{id}',[Register::class,"admin_sub_delete2"])->name('submission_delete_topics');
Route ::get('/admin_sub_delete3/{id}',[Register::class,"admin_sub_delete3"])->name('submission_delete_files');


Route::get('/admin_sub_approve/{id}/{title}/{des}',[Register::class,"approveC"])->name('approve_course');
Route::get('/admin_sub_approveT/{id}/{title}/{des}',[Register::class,"approveT"])->name('approve_topics');
Route::get('/admin_sub_approveF/{id}/{title}',[Register::class,"approveF"])->name('approve_files');


// Route ::get("/registration",function(){
//         $registration = Registration::all();
//         echo "<pre>";
//         print_r($registration -> toArray());
// });

Route::resource('course', CourseAdminController::class);
Route::resource('topic', TopicAdminController::class);
Route::resource('upload', UploadFileAdminController::class);


Route::get('/user',[Users::class,"courseView"])->middleware(AdminGate::class)->name('all_courses');
Route::get('/user/courses/{id}/topics', [Users::class, 'showTopics'])->name('course_topics');

Route::get('/user/files',[Users::class,"showFiles"])->middleware(AdminGate::class)->name('all_files');
Route::get('/user/download/{id}', [Users::class, 'downloadFile'])->name('download_files');

//search..
Route::post('/search',[Users::class,"search"])->name('search_course');

// middleware logout for user.............
Route::get('/logout',[Register::class,"logout"])->name('user_logout');

//manager logout and login.....
Route::get('/logout2',[Register::class,"logout2"])->name('manager_logout');
Route::get('/login2_manager',[Login::class,"login2_manager"])->name('manager_login');
Route::post('/login2_manager',[Login::class,"login2_manager_create"]);

//admin signup using auth..................
Route::get('/AdminLoginPage',[AdminLoginController::class,'AdminLogin'])->name('admin_login');
Route::post('/AdminLoginPage',[AdminLoginController::class,'AdminLogin_create']);
Route::get('/AdminLogoutPage',[AdminLoginController::class,'AdminLogout'])->name('admin_logout');
//admin login using auth..................
Route::get('/AdminLogin',[AdminLoginController::class,'Login'])->name('login_for_admin');
Route::post('/AdminLogin',[AdminLoginController::class,'LoginCreate']);

Route::get('/admin_directly',[Admin::class,'show2'])->name('admin_page');

//user login...............
Route::get('/user_login_page',[Register::class,"user_login_page"])->name('user_login');
Route::post('/user_login_page',[Register::class,"user_login_page_create"])->name('user_login');




