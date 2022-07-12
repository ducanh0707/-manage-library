<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'store','namespace'=>'App\Modules\Store\Controllers'], function(){

        Route::get('','StoreController@index');
        Route::post('new', 'StoreController@post_store_new');
        Route::post('new_multi', 'StoreController@post_store_new_multi');
        Route::post('edit/{store_id}', 'StoreController@post_store_edit');
        Route::get('del/{store_id}', 'StoreController@get_store_del');
        Route::get('status/{store_id}', 'StoreController@get_change_status');
        Route::get('status/{store_id}', 'StoreController@get_change_status');
 

        
    });
});