<?php

Route::group(['prefix'=>'admin/','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'post/{post_type}','namespace'=>'App\Modules\Post\Controllers'], function(){

        Route::get('','PostController@index');

        Route::get('new', 'PostNewController@get_post_new');
        Route::post('new', 'PostNewController@post_post_new');
        Route::get('edit/{post_id}', 'PostEditController@get_post_edit');
        Route::post('edit/{post_id}', 'PostEditController@post_post_edit');
        Route::get('del/{post_id}', 'PostEditController@get_post_del');
        Route::get('status/{post_id}', 'PostEditController@get_change_status');
        Route::post('action', 'PostController@post_action');
        Route::get('del_slide/{img_id}', 'PostEditController@get_del_slide_img');
        
    });
});