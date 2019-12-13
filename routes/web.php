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
    return view('welcome');
});




//--------- append route 2019-12-13 12:55:45----------

Route::get('/admin/layout', 'Admin\RenderController@index');
Route::get('/admin/layout/render', 'Admin\RenderController@render');
