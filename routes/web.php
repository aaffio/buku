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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/member', 'AdminController@member')->name('member');
Route::get('/member/create', 'AdminController@createMember');
Route::post('/member/create', 'AdminController@postCreateMember');
Route::get('/member/{id}', 'AdminController@getMember');
Route::post('/member/{id}', 'AdminController@updateMember');

Route::get('/book', 'AdminController@book')->name('book');
Route::get('/book/create', 'AdminController@createBook');
Route::post('/book/create', 'AdminController@postCreateBook');
