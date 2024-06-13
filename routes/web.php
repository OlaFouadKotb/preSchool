
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidderController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('lay',function(){
    return view('dashBoard.layouts.index');
});

 Route::get('/', [KidderController::class,'home'])->name('home');
Route::get('about', [KidderController::class, 'about'])->name('about');
Route::get('error', [KidderController::class, 'error'])->name('error');
//Route::get('becomeTeacher', [KidderController::class, 'becomeTeacher'])->name('becomeTeacher');
Route::get('appointment', [KidderController::class, 'appointment'])->name('appointment');
Route::get('call', [KidderController::class, 'callto'])->name('call');
//Route::get('/courses', [KidderController::class, 'create'])->name('courses.create');
Route::get('/home', [KidderController::class, 'index'])->name('home');
//Route::post('/courses', [DashBoardController::class, 'store'])->name('courses.store');
Route::get('contact', [KidderController::class, 'contact'])->name('contact');
Route::get('facility', [KidderController::class, 'facility'])->name('facility');
Route::get('team', [KidderController::class, 'team'])->name('team');
Route::get('testimo', [KidderController::class, 'testimo'])->name('testimo');
Route::get('classes', [KidderController::class, 'classes'])->name('classes');
Route::get('welcome', function(){
    return view('welcome');
});



Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth') // Apply 'auth' middleware to this route
    ->name('home');

Auth::routes();


// Routes for login and logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
