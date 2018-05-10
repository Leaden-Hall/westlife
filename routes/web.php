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

Route::view('/user', 'admin/user');
Route::view('/role', 'admin/role');
Route::view('/permission', 'admin/permission');
Route::view('/Album', 'admin/album');
Route::view('/blogs', 'admin/blog');
Route::view('/subscription', 'admin/subscription');
Route::view('/song', 'admin/song');
Route::view('/comment', 'admin/comment');

Route::view('/user_form', 'admin/user_form');
Route::view('/role_form', 'admin/role_form');
Route::view('/permission_form', 'admin/permission_form');
Route::view('/album_form', 'admin/album_form');
Route::view('/blog_form', 'admin/blog_form');
Route::view('/sub_form', 'admin/sub_form');
Route::view('/song_form', 'admin/song_form');


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function() {
  return view('about');
});

Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/{gallery}', 'GalleryController@show');

Route::get('/album', function() {
  return view('album/index');
});

Route::get('/blog',  'BlogController@index')->name('blog');

Route::get('/blog/{id}',  'BlogController@show');

Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

Route::get('/tour', 'TourController@index');

Route::get('/verify', function() {
  return view('verify');
});