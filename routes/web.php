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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Member
Route::get('/member', 'MemberController@index')->name('member');
Route::get('/detail-member/{id}', 'MemberController@show')->name('detail-member');
Route::get('/member-data', 'MemberController@getData')->name('member-data');
Route::get('/add-member', 'MemberController@create')->name('add-member');
Route::post('/add-member', 'MemberController@store')->name('add-member');
