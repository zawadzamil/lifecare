<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('service', function () {
    return view('service');
});
Route::get('about', function () {
    return view('about');
});
Route::get('data', function () {
    return view('dataInsert');
});
Route::get('doctors', function () {
    return view('doctor');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::post('addDepartment', '\App\Http\Controllers\DepartmentController@create');
Route::get('department/{id}', '\App\Http\Controllers\DepartmentController@show');


Route::post('addDoctor', '\App\Http\Controllers\DoctorController@create');
Route::get('doctor_single/{id}', '\App\Http\Controllers\DoctorController@show');



Route::post('message', '\App\Http\Controllers\DoctorController@message');



Route::post('saveAppinment', '\App\Http\Controllers\AppoinmentController@create');


Route::get('appoinment', '\App\Http\Controllers\AppoinmentController@index');
Route::get('appoinmentToDept/{id}', '\App\Http\Controllers\AppoinmentController@checkDept');
Route::get('appoinmentToDoc/{id}', '\App\Http\Controllers\AppoinmentController@checkDoc');


Route::get('profile', '\App\Http\Controllers\HomeController@user');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
