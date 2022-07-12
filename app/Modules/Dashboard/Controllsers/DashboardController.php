<?php
namespace App\Modules\Dashboard\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_orders;
use App\Http\Model\M_pay_history;
use App\Http\Model\M_post;
use App\Http\Model\M_config;
use App\Http\Model\M_store;
use App\Http\Model\M_company;
use App\Http\Model\M_book;
use App\Http\Model\M_truong;
use App\Http\Model\M_cat;
use App\Http\Model\User;
use Auth;

class DashboardController extends Controller{

    public function index(Request $request){
        $order_count = M_orders::count();
        $order_new = M_orders::orderby('id','desc')->limit(6)->get();

        $pay_history = M_pay_history::select('id','price')->get();

        $course_count = M_post::where('post_type_id',5)->count();
        $student_count = M_post::where('post_type_id',6)->count();
        $percen = M_config::where('name','percen_coupon')->first()->value;
        $pay_history_count = M_pay_history::where('user_id',Auth::user()->id)->count();
        $agency_count = User::where('user_type_id',3)->count();
        $company_count = M_company::count();
        $store_count = M_store::count();
        $book_count = M_book::count();
        $user_count = User::count();
        $cat_count = M_cat::count();

        $truong_list = M_truong::orderby('id','desc')->where('name','!=','')->limit(6)->get();
        $book_list = M_book::orderby('id','desc')->where('name','!=','')->limit(6)->get();
        $user_list = User::orderby('id','desc')->where('name','!=','')->limit(6)->get();
        $company_list = M_company::orderby('id','desc')->where('name','!=','')->limit(6)->get();


        $post_noti = M_post::whereHas('f_cat', function($q_cat){$q_cat->where('url', 'thong-bao');})->where('post.status','on')->orderby('orderby','desc')->limit(6)->get();
     

        
        return view('Dashboard::dashboard',['company_list'=>$company_list,'post_noti'=>$post_noti,'user_list'=>$user_list,'book_list'=>$book_list,'truong_list'=>$truong_list,'order_new'=>$order_new,'post_noti'=>$post_noti,'cat_count'=>$cat_count,'user_count'=>$user_count,'book_count'=>$book_count,'company_count'=>$company_count,'store_count'=>$store_count,'agency_count'=>$agency_count,'student_count'=>$student_count,'pay_history_count'=>$pay_history_count,'percen'=>$percen,'course_count'=>$course_count,'pay_history'=>$pay_history,'order_count'=>$order_count,'title'=>'Hệ thống quản trị đại lý Con Sáng Tạo']);
    }
}