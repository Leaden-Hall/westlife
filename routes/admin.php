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

Route::get('/role', 'RoleController@index');
Route::get('/role/form', 'RoleController@create');
Route::post('/save_role','RoleController@store');
Route::get('/delete_role/{id}','RoleController@destroy');
Route::get('/edit_role/{id}','RoleController@edit');
Route::put('/update_role/{id}','RoleController@update');

Route::get('/permission', 'PermissionController@index');
Route::get('/permission/form', 'PermissionController@create');
Route::post('/save_permission','PermissionController@store');
Route::get('/delete_permission/{id}','PermissionController@destroy');
Route::get('/edit_permission/{id}','PermissionController@edit');
Route::put('/update_permission/{id}','PermissionController@update');

Route::get('/blog', 'BlogController@index_admin');
Route::get('/blog/form', 'BlogController@create');
Route::post('/save_blog','BlogController@store');
Route::get('/delete_blog/{id}','BlogController@destroy');
Route::get('/edit_blog/{id}','BlogController@edit');
Route::put('/update_blog/{id}','BlogController@update');

Route::view('/album', 'admin/album');
Route::view('/subscription', 'admin/subscription');
Route::view('/song', 'admin/song');
Route::view('/comment', 'admin/comment');


Route::view('/user/form', 'PermissionController@create');
Route::view('/album/form', 'admin/album_form');
Route::view('/blog/form', 'admin/blog_form');
Route::view('/sub/form', 'admin/sub_form');
Route::view('/song/form', 'admin/song_form');