<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){

   Route::group(['prefix'=>'user','namespace'=>'App\Modules\AdminUser\Controllers'], function(){
      
      // nhom quyen 
      Route::post('role/new', 'RoleController@post_role_new');
      Route::post('role/edit/{id}', 'RoleController@post_role_edit');
      Route::get('role/del/{id}', 'RoleController@get_role_del');
      Route::get('role/{type_id}/permission', 'RoleController@get_role_permission');
      Route::get('role/{type_id}/permission/add/{per_id}/{type}', 'RoleController@get_role_permission_add');

      // quyen 
      Route::get('permission', 'PermissionController@get_permission');
      Route::post('permission/new', 'PermissionController@post_permission_new');
      Route::post('permission/edit/{id}', 'PermissionController@post_permission_edit');
      Route::get('permission/del/{id}', 'PermissionController@get_permission_del');

     
      // type 
      Route::get('type/{parent_id}', 'AdminUserController@index');

      //user  tinh
      Route::get('{type_id}/user_tinh/{user_id}', 'UserTinhController@get_user_tinh');
      Route::get('{type_id}/user_tinh/{user_id}/add/{tinh_id}', 'UserTinhController@get_user_add_tinh');

      // user 
      Route::get('{type_id}/parent/{user_parent_id}', 'AdminUserController@get_user_list');
      Route::get('{type_id}/parent/{user_parent_id}/new', 'AdminUserController@get_user_new');
      Route::post('{type_id}/parent/{user_parent_id}/new', 'AdminUserController@post_user_new');
      Route::get('{type_id}/parent/{user_parent_id}/edit/{id}', 'AdminUserController@get_user_edit');
      Route::post('{type_id}/parent/{user_parent_id}/edit/{id}', 'AdminUserController@post_user_edit');
      Route::get('{type_id}/parent/{user_parent_id}/status/{id}', 'AdminUserController@get_change_status');
      Route::get('{type_id}/parent/{user_parent_id}/del/{id}', 'AdminUserController@get_user_del');

       // hoa_hong
       Route::get('commission/{user_id}', 'CommissionController@get_commission');
       Route::post('commission/{user_id}/new', 'CommissionController@post_commission_new');
       Route::post('commission/{user_id}/edit/{id}', 'CommissionController@post_commissionn_edit');
       Route::get('commission/{user_id}/del/{id}', 'CommissionController@get_commissionn_del');
 

      
      
   });


});