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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/product','ProductController@index');


Route::get('/admin', function () {
    return view('admin/index');
});

//Routing
Route::group(['middleware'=>'auth','prefix' => 'admin'],function (){

    Route::get('/product','ProductController@all');
    Route::get('/serial','SerialController@index');
    Route::get('/product/add','ProductController@create');
    Route::post('/product/store','ProductController@store');
    Route::get('product/edit/{id}','ProductController@edit');
    Route::get('product/delete/{id}','ProductController@delete');
    Route::post('product/update','ProductController@update');



});

Auth::routes();

