<?php

Route::get('/', 'SiteController@index');


Route::group(['prefix' => 'painel'], function(){
    Route::get('/', 'PanelController@index');

    Route::get('images', 'ImageController@index')->name('images');
    Route::post('images/store', 'ImageController@store')->name('image.store');
    Route::delete('images/destroy/{id}', 'ImageController@destroy')->name('image.destroy');

    Route::resource('posts', 'PostController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
