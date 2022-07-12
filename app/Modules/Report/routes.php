<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'report','namespace'=>'App\Modules\Report\Controllers'], function(){
        Route::get('', 'ReportController@index');
        Route::get('report_user', 'ReportController@get_report_user');
        Route::get('report_user_sgd', 'ReportController@get_report_user_sgd');
        Route::get('report_user_gd', 'ReportController@get_report_user_gd');
        Route::get('report_user_pgd', 'ReportController@get_report_user_pgd');
        Route::get('report_user_phgd', 'ReportController@get_report_user_phgd');
        Route::get('report_user_truongphong', 'ReportController@get_report_user_truongphong');
        Route::get('report_user_truong', 'ReportController@get_report_user_truong');
        Route::get('report_user_gv', 'ReportController@get_report_user_gv');
    });
});