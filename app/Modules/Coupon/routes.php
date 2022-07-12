<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
       $namespace = 'App\Modules\Coupon\Controllers';
   Route::group(
       ['module'=>'Coupon', 'namespace' => $namespace,],
       function() {
           Route::get('coupon','CouponController@index');
           Route::post('coupon','CouponController@post_coupon');
       }
   );
});