<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){

   Route::group(['prefix'=>'account','namespace'=>'App\Modules\Account\Controllsers'], function(){
      

      // user 
      Route::get('', 'AccountController@get_user_list');
      Route::get('new', 'AccountController@get_user_new');
      Route::post('new', 'AccountController@post_user_new');
      Route::get('edit/{id}','AccountController@get_user_edit');
      Route::post('edit/{id}','AccountController@post_user_edit');
      Route::get('status/{id}', 'AccountController@get_change_status');
      Route::get('del/{id}', 'AccountController@get_user_del');
      
        // export
        Route::get('export', 'AccountController@get_export');
      //   import
      Route::get('import', 'AccountController@get_account_import');
      Route::post('import', 'AccountController@post_account_import');
   });


});