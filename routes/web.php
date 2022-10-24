<?php

use App\Http\Controllers\ChaptersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentLessonController;
use Illuminate\Support\Facades\Route;

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


//Route::get('/courses', 'CoursesController@index')->name('index');
//Route::get('/courses/delete/{id}', 'CoursesController@destroy')->name('xoa');
Route::get('/login', ['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('/login', ['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('/logout', ['as'=>'logout','uses'=>'Auth\LoginController@getlogout']);
Route::get('/signup',['as'=>'signup','uses'=>'Auth\LoginController@getSignup']);
Route::post('/signup',['as'=>'signup','uses'=>'Auth\LoginController@postSignup']);

Route::post('/store', [CommentLessonController::class, 'store'])->name('store');


Route::middleware(['auth'])->group(function(){
    Route::get('/', 'CoursesController@home');
    Route::resource('/courses', CoursesController::class);
    Route::resource('/chapters', ChaptersController::class);
    Route::resource('/lessons', LessonsController::class);

});
