<?php

Route::group(['prefix'=>'agency','namespace'=>'App\Modules\Agency\Controllers','middleware' => ['web', 'checkAgencyLogin']], function(){
        Route::get('dashboard', 'DashboardAgency@index');
        Route::get('order', 'OrderAgency@index');
        Route::get('course', 'CourseAgency@index');
        Route::get('coupon_info', 'CouponInfoAgency@index');
        // thanh toan
        Route::get('bill', 'BillAgency@index');
        //xoa ngan hang
        Route::get('bill/bank', 'BillAgency@get_bank');
        Route::get('bill/del_bank/{id}', 'BillAgency@get_del_bank');
        Route::post('bill/edit_bank/{id}', 'BillAgency@post_edit_bank');
        Route::post('bill/add_bank', 'BillAgency@post_add_bank');
        Route::get('bill/history', 'BillAgency@get_history');

        Route::get('faq', 'FaqAgency@index');
        // huong dan 
        Route::get('tut/video', 'TutAgency@tut_video');
        Route::get('tut/sales', 'TutAgency@tut_sales');
        Route::get('tut/file', 'TutAgency@tut_file');


        Route::get('policy', 'PolicyAgency@index');
        // thong bao 
        Route::get('noti', 'NotiAgency@index');
        Route::get('noti/{id}', 'NotiAgency@get_view_noti');
        Route::get('user', 'UserAgency@index');
        Route::post('user/change_pass', 'UserAgency@change_pass');
   
});