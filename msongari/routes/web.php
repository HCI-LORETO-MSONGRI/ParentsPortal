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

Route::view('/', 'home');

Route::get('students', 'StudentsController@index');
Route::get('admin/create', 'StudentsController@create');
Route::post('students', 'StudentsController@store');
Route::get('students/{student}', 'StudentsController@show');

//Route::view('feeStatement', 'feeStatement');

//Route::view('feeStructure', 'feeStructure');

//Route::view('parent', 'parent');

//Route::view('student', 'student');

//Route::view('report', 'report');
