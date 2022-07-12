<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'pay','namespace'=>'App\Modules\Pay\Controllers'], function(){
        Route::get('', 'PayController@index');
        Route::get('history', 'PayController@get_history');
        Route::get('bank', 'PayController@get_bank');
        Route::post('bank/add/{user_id}', 'PayController@post_add_bank');
        Route::post('bank/edit/{user_id}/{id}', 'PayController@post_edit_bank');
        Route::get('bank/del/{id}', 'PayController@get_bank_del');
        Route::post('payed/{user_id}', 'PayController@post_payed');
        Route::get('del_history/{id}', 'PayController@get_history_del');
    });
});