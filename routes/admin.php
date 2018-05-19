<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//  dd('Welcome to admin subdomain.');
//});

Route::view('/', 'admin/login');
Route::view('/home', 'admin/home');


Route::view('/user', 'admin/user');
Route::view('/role', 'admin/role');
Route::view('/permission', 'admin/permission');
Route::view('/album', 'admin/album');
Route::view('/blog', 'admin/blog');
Route::view('/subscription', 'admin/subscription');
Route::view('/song', 'admin/song');
Route::view('/comment', 'admin/comment');


Route::view('/user/form', 'admin/user_form');
Route::view('/role/form', 'admin/role_form');
Route::view('/permission/form', 'admin/permission_form');
Route::view('/album/form', 'admin/album_form');
Route::view('/blog/form', 'admin/blog_form');
Route::view('/sub/form', 'admin/sub_form');
Route::view('/song/form', 'admin/song_form');