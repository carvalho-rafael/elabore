<?php

Route::get('/', 'SiteController@index');

Route::get('/painel', 'PanelController@index');

Route::prefix('painel')->group(function(){
    Route::get('galerias', 'GaleriaController@index')->name('galerias.index');
    Route::post('galerias/store', 'GaleriaController@store')->name('galerias.store');
    Route::get('galerias/{id}', 'GaleriaController@show')->name('galerias.show');
    Route::patch('galerias/{id}', 'GaleriaController@update')->name('galerias.update');
    Route::delete('galerias/{id}', 'GaleriaController@destroy')->name('galerias.destroy');

    Route::get('images', 'ImageController@index');
    Route::post('images/store', 'ImageController@store');

    Route::resource('posts', 'PostController');
});