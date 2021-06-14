<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', 'frontend\FrontendController@index')->name('frontend-home');
Route::get('post/details/{post_slug}', 'frontend\FrontendController@postdetails')->name('post.details');

Route::get('all/recent-notice', 'frontend\FrontendController@allrecent')->name('post.all.recent');
Route::get('all/admission-notice', 'frontend\FrontendController@alladmission')->name('post.all.admission');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// User Controller
Route::prefix('users')->group(function(){
Route::get('user-view', 'backend\UserController@view')->name('users.view');
Route::get('user-add', 'backend\UserController@add')->name('users.add');
Route::post('user-store', 'backend\UserController@store')->name('users.store');

});

Route::prefix('students')->group(function(){
Route::get('student-view', 'backend\StudentController@view')->name('students.view');
Route::get('student-add', 'backend\StudentController@add')->name('students.add');
Route::post('student-store', 'backend\StudentController@store')->name('students.store');
Route::get('student-edit/{id}', 'backend\StudentController@edit')->name('students.edit');
Route::post('student-update/{id}', 'backend\StudentController@update')->name('students.update');
Route::get('student-delete/{id}', 'backend\StudentController@delete')->name('students.delete');
Route::get('student-active/{id}', 'backend\StudentController@active')->name('students.active');
Route::get('student-inactive/{id}', 'backend\StudentController@inactive')->name('students.inactive');


});

Route::prefix('logos')->group(function(){
Route::get('logo-view', 'backend\LogoController@view')->name('logos.view');
Route::get('logo-add', 'backend\LogoController@add')->name('logos.add');
Route::post('logo-store', 'backend\LogoController@store')->name('logos.store');
Route::get('logo-edit/{id}', 'backend\LogoController@edit')->name('logos.edit');
Route::post('logo-update/{id}', 'backend\LogoController@update')->name('logos.update');
Route::get('logo-delete/{id}', 'backend\LogoController@delete')->name('logos.delete');

});


Route::prefix('sliders')->group(function(){
Route::get('slider-view', 'backend\SliderController@view')->name('sliders.view');
Route::get('slider-add', 'backend\SliderController@add')->name('sliders.add');
Route::post('slider-store', 'backend\SliderController@store')->name('sliders.store');
Route::get('slider-edit/{id}', 'backend\SliderController@edit')->name('sliders.edit');
Route::post('slider-update/{id}', 'backend\SliderController@update')->name('sliders.update');
Route::get('slider-delete/{id}', 'backend\SliderController@delete')->name('sliders.delete');
Route::get('slider-active/{id}', 'backend\SliderController@active')->name('sliders.active');
Route::get('slider-inactive/{id}', 'backend\SliderController@inactive')->name('sliders.inactive');


});

Route::prefix('principals')->group(function(){
Route::get('principal-view', 'backend\PrincipalController@view')->name('principals.view');
Route::get('principal-add', 'backend\PrincipalController@add')->name('principals.add');
Route::post('principal-store', 'backend\PrincipalController@store')->name('principals.store');
Route::get('principal-edit/{id}', 'backend\PrincipalController@edit')->name('principals.edit');
Route::post('principal-update/{id}', 'backend\PrincipalController@update')->name('principals.update');
Route::get('principal-delete/{id}', 'backend\PrincipalController@delete')->name('principals.delete');
Route::get('principal-active/{id}', 'backend\PrincipalController@active')->name('principals.active');
Route::get('principal-inactive/{id}', 'backend\PrincipalController@inactive')->name('principals.inactive');


});

Route::prefix('histories')->group(function(){
Route::get('college/history-view', 'backend\HistoryController@view')->name('histories.view');
Route::get('college/history-add', 'backend\HistoryController@add')->name('histories.add');
Route::post('college/history-store', 'backend\HistoryController@store')->name('histories.store');
Route::get('college/history-edit/{id}', 'backend\HistoryController@edit')->name('histories.edit');
Route::post('college/history-update/{id}', 'backend\HistoryController@update')->name('histories.update');
Route::get('college/history-delete/{id}', 'backend\HistoryController@delete')->name('histories.delete');
Route::get('college/history-active/{id}', 'backend\HistoryController@active')->name('histories.active');
Route::get('college/history-inactive/{id}', 'backend\HistoryController@inactive')->name('histories.inactive');


});


Route::prefix('posts')->group(function(){
Route::get('post-view', 'backend\PostController@view')->name('posts.view');
Route::get('post-add', 'backend\PostController@add')->name('posts.add');
Route::post('post-store', 'backend\PostController@store')->name('posts.store');
Route::get('post-edit/{id}', 'backend\PostController@edit')->name('posts.edit');
Route::post('post-update/{id}', 'backend\PostController@update')->name('posts.update');
Route::get('post-delete/{id}', 'backend\PostController@delete')->name('posts.delete');
Route::get('post-active/{id}', 'backend\PostController@active')->name('posts.active');
Route::get('post-inactive/{id}', 'backend\PostController@inactive')->name('posts.inactive');


});



