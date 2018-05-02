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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function() {
  return view('about');
});



Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/{gallery}', 'GalleryController@show');



Route::get('/album', 'AlbumController@index');
Route::get('/album/{album}', 'AlbumController@show');
Route::get('/album/listen/{album}', 'AlbumController@listen');
Route::get('/album/download/{album}', 'AlbumController@download');

Route::get('/song/download/{album}/{song}', 'SongController@download');

Route::get('/blog',  'BlogController@index')->name('blog');
Route::get('/blog/{id}',  'BlogController@show');

Route::post('/comment',  'CommentController@store');
Route::put('/comment/update/{id}',  'CommentController@update');
Route::delete('/comment/{id}',  'CommentController@destroy');
Route::put('/comment/{id}',  'CommentController@edit');

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/tour', 'TourController@index');

Route::get('/verify', function() {
  return view('verify');
});