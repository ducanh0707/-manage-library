<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('robots.txt', function(){
    return response(view('V_fontend/robots'))->header('Content-Type', 'text/plain');
});
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap.xml/articles', 'SitemapController@articles');

Route::get('_gio_hang_.html5','Controller@get_cart');

Route::post('_gio_hang_','Controller@post_add_cart');

Route::get('', 'Controller@get_home');
Route::get('form/search', 'Controller@get_search');
// dat hang
Route::post('form/dat-hang', 'ordersController@post_orders');

Route::get('{url_book}.html','bookController@get_book');
Route::get('{url_category}','bookController@get_category');

Route::get('bai-viet/{url}.html','Controller@get_post');
Route::get('bai-viet/{url}','Controller@get_cat');
  
Route::get('info/thong-tin','profileController@get_profile');
Route::get('info/thong-tin-thue','profileController@get_user_thue');
Route::get('info/thong-tin-mua','profileController@get_user_mua');
// sửa thông tin
Route::post('info/thong-tin','profileController@post_user');
// hoa hong
Route::get('info/hoa-hong','profileController@get_hh');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// dang nhap khach hang
Route::get('auth/regis',['as'=>'getregis','uses'=>'Auth\RegisterController@get_create']);
Route::post('auth/regis',['as'=>'postregis','uses'=>'Auth\RegisterController@post_create']);
 
 // comment
Route::post('auth/comment','Controller@comment');

// dang nhap admin
Route::get('auth/login',['as'=>'postlogin','uses'=>'Auth\LoginController@get_login']);
Route::get('admin/webux',['as'=>'postlogin','uses'=>'Auth\LoginController@get_login']);
Route::post('admin/webux',['as'=>'postlogin','uses'=>'Auth\LoginController@post_login']);
//log out
Route::get('admin/logout', 'Auth\LoginController@getlogout');

Route::get('app/local/huyen/{tinh_id}','Controller@get_huyen');
Route::get('app/level/positon/{level_id}','Controller@get_level_positon');
Route::get('app/local/truong/{huyen_id}','Controller@get_truong');
Route::get('app/local/store/{huyen_id}','Controller@get_store');
Route::get('app/local/truong_user/{huyen_id}','Controller@get_truong_user');
Route::get('app/local/lop_user/{truong_id}','Controller@get_lop_user');