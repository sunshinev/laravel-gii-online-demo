<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




//--------- append route 2019-12-13 12:55:45----------

Route::any('/admin/users/list', 'Admin\UsersController@getList');
Route::any('/admin/users/detail', 'Admin\UsersController@getDetail');
Route::any('/admin/users/save', 'Admin\UsersController@save');
Route::any('/admin/users/delete', 'Admin\UsersController@delete');
Route::any('/admin/users/batch_delete', 'Admin\UsersController@batchDelete');
