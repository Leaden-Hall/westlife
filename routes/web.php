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

Route::view('/admin_login', 'admin/login');
Route::view('/admin_home', 'admin/home');

Route::view('/admin_user', 'admin/user');
Route::view('/admin_role', 'admin/role');
Route::view('/admin_permission', 'admin/permission');
Route::view('/admin_album', 'admin/album');
Route::view('/admin_blog', 'admin/blog');
Route::view('/admin_subscription', 'admin/subscription');
Route::view('/admin_song', 'admin/song');
Route::view('/admin_comment', 'admin/comment');

Route::view('/admin_user_form', 'admin/user_form');
Route::view('/admin_role_form', 'admin/role_form');
Route::view('/admin_permission_form', 'admin/permission_form');
Route::view('/admin_album_form', 'admin/album_form');
Route::view('/admin_blog_form', 'admin/blog_form');
Route::view('/admin_sub_form', 'admin/sub_form');
Route::view('/admin_song_form', 'admin/song_form');


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/account', 'UserController@index');
Route::get('/account/password', 'UserController@password');
Route::post('/account/updatePassword', 'UserController@updatePassword');
Route::get('/account/email', 'UserController@email');
Route::post('/account/updateEmail', 'UserController@updateEmail');


Route::get('/account/blogs', 'BlogController@manageBlog');
Route::get('/account/blogs/edit/{blog}', 'BlogController@editBlog');

Route::get('/about', 'BlogController@about');

Route::post('/subscribe', 'SubscriptionController@store');

Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/{gallery}', 'GalleryController@show');



Route::get('/album', 'AlbumController@index');
Route::get('/album/{album}', 'AlbumController@show');
Route::get('/album/listen/{album}', 'AlbumController@listen');
Route::get('/album/download/{album}', 'AlbumController@download');
Route::get('/song/download/{album}/{song}', 'SongController@download');

Route::post('/contact/new', 'ContactController@store');

Route::get('/blog',  'BlogController@index')->name('blog');
Route::get('/blog/{id}',  'BlogController@show');

Route::post('/comment',  'CommentController@store');
Route::put('/comment/update/{id}',  'CommentController@update');
Route::delete('/comment/{id}',  'CommentController@destroy');
Route::put('/comment/{id}',  'CommentController@edit');

Route::get('/contact', 'HomeController@contactPage');

Route::get('/tour', 'TourController@index');

Route::get('/verify/{user}/{hash}', 'UserController@verifyEmail');