<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'accountant','namespace'=>'App\Modules\Accountant\Controllers'], function(){

        Route::get('','AccountantController@index');
        
        Route::post('deposits/new','AccountantController@post_deposits_new');
        Route::post('service/new','AccountantController@post_service_new');
        Route::post('buy/new','AccountantController@post_buy_new');
        // edit
        Route::post('edit/{accountant_id}', 'AccountantController@post_accountant_edit');
        Route::get('edit/{accountant_id}', 'AccountantController@get_accountant_edit');
      
        // xoa
        Route::get('del/{accountant_id}', 'AccountantController@get_accountant_del');

        
    });
});