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

// Route::get('/', function () {
//     return view('index');
// });
Route::post('news','paperController@news');
Route::get('/','paperController@index')->name('index');

Route::get('/error','paperController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/catagories-post', function () {
    return view('catagories-post');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/single-post', function () {
    return view('single-post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});


Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/reporter/register', function () {
    return view('reporter.register');
});
Route::post('reg', 'reporterController@reg');
Route::post('login', 'adminController@login');

Route::group(['middleware'=>'checkloggedin'],function(){

Route::get('/admin/add', function () {
    return view('admin.add');
});

Route::post('store', 'paperController@store');

Route::get('admin/table','paperController@table');
Route::get('admin/rlist','reporterController@rlist'); 

Route::get('admin/editn/{id}','paperController@edit');
Route::get('admin/rview/{id}','reporterController@rview');
Route::post('update/{id}', 'paperController@update');
Route::post('updates/{id}', 'reporterController@updates');
Route::get('delete/{id}', 'paperController@delete');

Route::post('logout','adminController@logout');

});

Route::get('/reporter/login', function () {
    return view('reporter.login');
});

Route::post('rlogin', 'reporterController@rlogin');

Route::group(['middleware'=>'chkloggedin'],function(){

Route::get('/reporter/add', function () {
    return view('reporter.add');
});

Route::post('rstore', 'paperController@rstore');

Route::get('reporter/table','paperController@rtable'); 

Route::post('logout','reporterController@logout');

});