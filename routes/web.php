<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fcontroller;
use App\Http\Controllers\MK;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//to accsses the main view
Route::get('/', function () {
    return view('welcome');
});

//accsses bootstrap start view 
Route::get('/landing', function () {
    return view('bootstrapstart');
});

//accsess controller with all methoud 7
Route::resource('first',fcontroller::class);

//accsses to method getIndex  in controller fcontroller
Route::get('first2','fcontroller@getIndex');

//accsses to view from controller 
route::get('view','MK@blabla');

//to accsses About 
route::get('about',function(){
 return view('about');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
