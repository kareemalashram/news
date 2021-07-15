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

//Route::get('/h','PostController@ca')->name('home');
//Route::get('/h','PostController@ca')->name('home');

Route::get('/','HomeController@kareem')->name('kareem');
Route::get('/page','HomeController@raisa')->name('rasia');
Route::get('/courese','HomeController@courese')->name('courese');

Route::any('/post/{id}','HomeController@single_post')->name('single_post');

Route::any('/single_course/{id}','HomeController@single_course')->name('single_course');
Route::POST('/tranee/{course_id}','HomeController@register_new_tranee')->name('register_new_traneea');

Route::get('/weather/{id}','HomeController@weather_single')->name('weather_single');

Route::get('/dashbord','DashboardController@index')->name('dashbord');

Route::get('/dashbord/imagelib','Imagelibercontroller@ssssds')->name('imagelib');

Route::group(['middleware' => ['role']], function () {
    Route::any('/dashbord/add_news/news/add','DashboardController@add_news')->name('add_news');
});

Route::any('/dashbord/add_new_menu','MenuCountroller@add_new_menu')->name('add_new_menu');
Route::any('/dashbord/show_new_menu','MenuCountroller@show_new_menu')->name('show_new_menu');

Route::get('/dashbord/show_news/news/show','DashboardController@show_news')->name('show_news');
Route::any('/dashbord/edit_news/news/edits/{id}','DashboardController@edit_news')->name('edit_news');

Route::get('/dashbord/show_courses/courses/show','DashboardController@show_courses')->name('show_courses');
Route::any('/dashbord/add_courses/courses/add','DashboardController@add_courses')->name('add_courses');
Route::any('/dashbord/edit_courses/courses/edits/{id}','DashboardController@edit_courses')->name('edit_courses');

Route::get('/dashbord/show_weather/weather/show','DashboardController@show_weather')->name('show_weather');
Route::any('/dashbord/add_weather/weather/add','DashboardController@add_weather')->name('add_weather');
Route::any('/dashbord/edit_weather/weather/edits/{id}','DashboardController@edit_weather')->name('edit_weather');


Route::get('/dashbord/show_catgory/catgory/show','DashboardController@show_catgory')->name('show_catgory');
Route::any('/dashbord/add_catgory/catgory/add','DashboardController@add_catgory')->name('add_catgory');



Route::get('/api/get_cats','ApiController@get_cats')->name('get_cats_api');


Route::get('/ForgotPassword','ForgotPassword@forgot');
Route::post('/ForgotPassword','ForgotPassword@password');



Route::post('/api/delete_cat/{id}','ApiController@delete_cat')->name('delete_cat');
Route::post('/api/delete_post/{id}','ApiController@delete_post')->name('delete_post');
Route::post('/api/delete_courses/{id}','ApiController@delete_courses')->name('delete_courses');
Route::post('/api/delete_weather/{id}','ApiController@delete_weather')->name('delete_weather');
Route::get('/api/get_cats','ApiController@get_cats');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
