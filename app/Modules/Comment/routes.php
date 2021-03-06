<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'comment','namespace'=>'App\Modules\Comment\Controllers'], function(){

        Route::get('','CommentController@index');
        Route::get('post/{post_id}','CommentController@comment_post');
        Route::post('edit/{comment_id}', 'CommentController@post_comment_edit');
        Route::get('del/{comment_id}', 'CommentController@get_comment_del');
        Route::get('status/{comment_id}', 'CommentController@get_change_status');
        Route::post('action', 'CommentController@post_action');

        Route::get('content_comment','CommentController@get_content_comment');
        Route::post('content_comment','CommentController@post_content_comment');
        Route::post('content_comment/edit/{id}','CommentController@post_content_comment_edit');
    });
});