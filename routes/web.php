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

Route::get('/', function(){
 return redirect()->to('/front');
});
Route::resource('front', 'IndexController');
Route::get('about', 'IndexController@about');
Route::get('courses', 'IndexController@courses');
Route::get('contact', 'IndexController@contact');

Route::post('/login/proses','Auth\LoginController@getLogin');
Route::get('/logout', function(){
	Auth::logout();
	Session::flush();
	return redirect('/');
});

Route::auth();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/dashboard', 'AdminController@dashboard');

/*  routes profil */
Route::get('/home/profil', 'IndexController@profil');
Route::get('/home/profil/view', 'IndexController@viewprofil');

/* admin routes */
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');

/* admin create post */
Route::resource('crudgallery', 'GalleryController');
Route::resource('crudguru', 'GuruController');
Route::resource('embed', 'EmbedYoutube');
Route::resource('messages', 'MessagesController');
Route::resource('profil', 'myprofilUpdate');

/* admin show table */
Route::get('/admin/createcourses', 'AdminController@createcourses');
Route::get('/admin/createguru', 'AdminController@createguru');
Route::get('/admin/creategallery', 'AdminController@creategallery');

Route::get('/admin/dataguru', 'AdminController@dataguru');
Route::get('/admin/datauser', 'AdminController@datauser');
Route::get('/admin/datacourses', 'AdminController@datacourses');

Route::get('admin/cetak', 'cetakPdfController@cetakpdf');
Route::get('/admin/activity', 'AdminController@activity');


Route::post('courses', ['as' => 'messages.ambilcourse', 'uses' => 'MessagesController@ambilcourse']);
/* route message */
Route::group(['prefix' => 'messages'], function () {
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
	Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
});

