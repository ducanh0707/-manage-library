<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'book','namespace'=>'App\Modules\Book\Controllers'], function(){

        Route::get('','BookController@index');
        // new 
        Route::get('new', 'BookNewController@get_book_new');
        Route::post('new', 'BookNewController@post_book_new');
        Route::post('new_multi', 'BookController@post_book_new_multi');
        //EDIT
        Route::get('edit/{book_id}', 'BookEditController@get_book_edit');
        Route::post('edit/{book_id}', 'BookEditController@post_book_edit');

        Route::get('del/{book_id}', 'BookEditController@get_book_del');
        Route::get('status/{book_id}', 'BookEditController@get_change_status');
        Route::get('status/{book_id}', 'BookEditController@get_change_status');
        Route::get('theme_edit/{cat_id}/{cat_type}', 'BookEditController@get_book_theme_edit');
        Route::post('theme_edit/{cat_id}/{cat_type}', 'BookEditController@post_book_theme_edit');

        
    });
});