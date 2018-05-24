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

Route::get('/', 'adminController@welcome');
Route::get('/home', 'adminController@home');

Route::post('/login', 'adminController@login');
Route::get('/logout', 'adminController@logout');

Route::middleware(['admin'])->group(function () {
  Route::get('/user', 'UserController@index');
  Route::get('/delete_user/{user}', 'UserController@destroy');

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

  Route::get('subscription', 'SubscriptionController@index');
  Route::get('/delete_sub/{id}','SubscriptionController@destroy');

  Route::get('/album', 'AlbumController@adminIndex');
  Route::get('/album/add', 'AlbumController@create');
  Route::post('/album/add', 'AlbumController@store');
  Route::get('/album/view/{album}', 'AlbumController@view');
  Route::get('/album/delete/{album}', 'AlbumController@destroy');

  Route::get('/blog', 'BlogController@index_admin');
  Route::get('/blog/form', 'BlogController@create');
  Route::post('/save_blog','BlogController@store');
  Route::get('/delete_blog/{id}','BlogController@destroy');
  Route::get('/edit_blog/{id}','BlogController@edit');
  Route::put('/update_blog/{id}','BlogController@update');

  Route::get('/contact', 'ContactController@index');
  Route::get('/response_contact/{id}','ContactController@responseForm');
  Route::post('/response_contact/{id}','ContactController@response');
});

Route::view('/song', 'admin/song');


Route::view('/user/form', 'PermissionController@create');
Route::view('/album/form', 'admin/album_form');
Route::view('/blog/form', 'admin/blog_form');
Route::view('/sub/form', 'admin/sub_form');
Route::view('/song/form', 'admin/song_form');