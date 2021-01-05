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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'chat')->middleware('auth');
Route::resource('messages', 'MessageController')->only([
    'index',
    'store'
]);


Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/user/history', 'HomeController@userHistory')->name('userHistory')->middleware('is_admin');
Route::get('admin/userlist/manage-user', 'HomeController@manageUserHistory')->name('manageUserHistory')->middleware('is_admin');
Route::get('admin/userlist/manage-user/edit/{id}', 'HomeController@editUser')->name('editUser')->middleware('is_admin');
Route::post('admin/userlist/manage-user/edit/{id}', 'HomeController@updateUser')->name('updateUser')->middleware('is_admin');
Route::get('admin/userlist/manage-user/delete/{id}', 'HomeController@deleteUser')->name('deleteUser')->middleware('is_admin');

// Is Admin Route
Route::get('/userstatus/{id}/{s}', 'HomeController@userStatus')->name('userStatus')->middleware('is_admin');
