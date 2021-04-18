<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbcontroller;
use App\Http\Controllers\postcontroller;
Route::get('/welcome', function () {return view('welcome');});

Route::get('/', function () {return view('home');});

Route::view('home','home');

Route::view('register','register');

Route::view('login','login');


Route::get('dashboard',[postcontroller::class,'dashboard']);

Route::post('registeruser',[dbcontroller::class,'registeruser']);



Route::post('loginuser',[dbcontroller::class,'loginuser']);

Route::get('logout', function(){
    session()->forget('user');
    return redirect('home');
});





Route::view('aposts','aposts');

Route::post('addposts',[postcontroller::class,'addpost']);


Route::get('vposts', [postcontroller::class, 'allposts']);



Route::get('vposts/{id}', [postcontroller::class, 'viewposts']);

Route::view('viewposts','viewposts');

Route::get('/editpost/{id}', [postController::class, 'editpost']);

Route::post('updatepost', [postcontroller::class, 'updatepost']);

Route::get('deletepost/{id}',[postcontroller::class,'deletepost']);
