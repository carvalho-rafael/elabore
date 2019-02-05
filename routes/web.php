<?php

Route::get('/', 'SiteController@index');

Route::get('/painel', 'PanelController@index');

Route::prefix('painel')->group(function(){
    Route::get('images', 'ImageController@index');
    Route::get('galerias', 'GaleriaController@index');
    Route::post('galerias/store', 'GaleriaController@store');
    Route::get('galerias/{id}', 'GaleriaController@show');
    Route::patch('galerias/{id}', 'GaleriaController@update');
    Route::post('images/store', 'ImageController@store');
    Route::resource('posts', 'PostController');
});