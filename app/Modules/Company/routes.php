<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'company','namespace'=>'App\Modules\Company\Controllers'], function(){

        Route::get('','CompanyController@index');
        Route::post('new', 'CompanyController@post_company_new');
        Route::post('new_multi', 'CompanyController@post_company_new_multi');
        Route::post('edit/{company_id}', 'CompanyController@post_company_edit');
        Route::get('del/{company_id}', 'CompanyController@get_company_del');
        Route::get('status/{company_id}', 'CompanyController@get_change_status');
        Route::get('status/{company_id}', 'CompanyController@get_change_status');
        Route::get('theme_edit/{cat_id}/{cat_type}', 'CompanyController@get_company_theme_edit');
        Route::post('theme_edit/{cat_id}/{cat_type}', 'CompanyController@post_company_theme_edit');

        
    });
});