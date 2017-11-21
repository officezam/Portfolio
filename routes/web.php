<?php

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

Route::get('/', function () {return view('auth.login');});
Route::get('/login', function () {return view('auth.login');});

Route::get('/backend', function () { return view('backend.dashboard');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('save-employee', 'EmployeeController@saveEmployee')->name('save-employee');
Route::get('add-employee', function(){return view('backend.user.addemployeeform');})->name('addemployee');
Route::get('show-employee', 'EmployeeController@showEmployee')->name('showemployee');
Route::get('Delete-User/{user_id}', 'EmployeeController@deletUser')->name('delete-user-data');
Route::get('Edit-User/{user_id}', 'EmployeeController@EditUser')->name('edit-user-data');

