<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
       $namespace = 'App\Modules\Setting\Controllers';
   Route::group(
       ['module'=>'Setting', 'namespace' => $namespace,],
       function() {
           Route::get('setting','SettingController@index');
           Route::post('setting','SettingController@post_setting');
      
       }
   );
});