<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('posts', 'PostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'PostController@add');
    Route::get('edit/{id}', 'PostController@edit');
    Route::post('update/{id}', 'PostController@update');
    Route::delete('delete/{id}', 'PostController@delete');
});