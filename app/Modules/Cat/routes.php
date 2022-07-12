<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'cat','namespace'=>'App\Modules\Cat\Controllers'], function(){

        Route::get('','CatController@index');
        Route::post('new', 'CatController@post_cat_new');
        Route::post('new_multi', 'CatController@post_cat_new_multi');
        Route::post('edit/{cat_id}', 'CatController@post_cat_edit');
        Route::get('del/{cat_id}', 'CatController@get_cat_del');
        Route::get('status/{cat_id}', 'CatController@get_change_status');
        Route::get('status/{cat_id}', 'CatController@get_change_status');
        
        Route::get('theme_edit/{cat_id}/{cat_type}', 'CatController@get_cat_theme_edit');
        Route::post('theme_edit/{cat_id}/{cat_type}', 'CatController@post_cat_theme_edit');

        
    });
});