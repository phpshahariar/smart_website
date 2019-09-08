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

Route::get('/', 'FrontendController@index');
Route::get('/view/products', 'FrontendController@view_product');
Route::get('/service/details', 'FrontendController@service_details');
Route::get('/supports', 'FrontendController@supports');
Route::post('/custom/question', 'FrontendController@customer_question');

Auth::routes(['register' => false, '.env' => false]);

Route::get('/home', 'HomeController@index');

//Backend Work Controller

//Slider Controller Work
Route::get('/add/slider', 'SliderController@add_slider');
Route::post('/save/slider', 'SliderController@save_slider');
Route::get('/active/slider/{id}', 'SliderController@active_slider');
Route::get('/pending/slider/{id}', 'SliderController@pending_slider');
Route::get('/delete/slider/{id}', 'SliderController@delete_slider');


//Product Controller Work
Route::get('/add/product', 'ProductController@add_product');
Route::post('/save/product', 'ProductController@save_product');
Route::get('/active/product/{id}', 'ProductController@active_product');
Route::get('/pending/product/{id}', 'ProductController@pending_product');
Route::get('/delete/product/{id}', 'ProductController@delete_product');

//Service Controller Work
Route::get('/add/service', 'ServiceController@add_service');
Route::post('/save/service', 'ServiceController@save_service');
Route::get('/active/service/{id}', 'ServiceController@active_service');
Route::get('/pending/service/{id}', 'ServiceController@pending_service');
Route::get('/delete/service/{id}', 'ServiceController@delete_service');


//SupportController
Route::get('/add/support', 'SupportController@add_support');
Route::post('/save/support', 'SupportController@save_support');
Route::get('/active/support/{id}', 'SupportController@active_support');
Route::get('/pending/support/{id}', 'SupportController@pending_support');
Route::get('/delete/support/{id}', 'SupportController@delete_support');
