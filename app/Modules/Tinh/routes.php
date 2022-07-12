<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'tinh','namespace'=>'App\Modules\Tinh\Controllers'], function(){
        Route::post('{tinh_id}/edit_ajax', 'HuyenController@post_huyen_ajax');
        //danh sach
        Route::get('{tinh_id}', 'TinhController@index');
    
    // tinh
        //them
        Route::post('new', 'TinhController@post_tinh_new');
        // sua vi tri 
        Route::post('edit/local', 'TinhController@post_tinh_edit_local');
        Route::post('edit/{id}', 'TinhController@post_tinh_edit');
        //xoa
        Route::get('del/{id}', 'TinhController@get_tinh_del');
        //status
        Route::get('status/{id}', 'TinhController@get_change_status');
     

    //huyen
        // view 
        Route::get('{tinh_id}/huyen/{huyen_id}', 'HuyenController@index');
       
        // them 
        Route::post('{tinh_id}/new', 'HuyenController@post_huyen_new');
        Route::post('{tinh_id}/new_multi', 'HuyenController@post_huyen_new_multi');
        //xoa
        Route::get('{tinh_id}/del/{huyen_id}', 'HuyenController@get_huyen_del');
        // thay doi trang thai
        Route::get('{tinh_id}/status/{id}', 'HuyenController@get_change_status');
       
    //truong
        Route::get('{tinh_id}/huyen/{huyen_id}/truong/{truong_id}', 'TruongController@index');
        Route::post('{tinh_id}/huyen/{huyen_id}/edit_ajax', 'TruongController@post_truong_ajax');
        // them 
        Route::post('{tinh_id}/huyen/{huyen_id}/new_truong_multi', 'TruongController@post_truong_new_multi');
        //xoa
        Route::get('{tinh_id}/huyen/{huyen_id}/truong/del/{truong_id}', 'TruongController@get_truong_del');
        // thay doi trang thai
        Route::get('{tinh_id}/huyen/{huyen_id}/truong/status/{truong_id}', 'TruongController@get_change_status');

    // lop 
        Route::get('{tinh_id}/huyen/{huyen_id}/truong/{truong_id}/lop/{lop_id}', 'LopController@index');
        // them 
        Route::post('{tinh_id}/huyen/{huyen_id}/truong/{truong_id}/new_truong_multi', 'LopController@post_lop_new_multi');
        //xoa
        Route::get('{tinh_id}/huyen/{huyen_id}/truong/{truong_id}/del/{lop_id}', 'LopController@get_lop_del');
        // thay doi trang thai
        Route::get('{tinh_id}/huyen/{huyen_id}/truong/{truong_id}/status/{lop_id}', 'LopController@get_change_status');


    });
});