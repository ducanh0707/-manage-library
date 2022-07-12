<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_config;
use App\Http\Model\M_pay_history;
use App\Http\Model\M_orders;
use App\Http\Model\M_post;
use Auth;
use DB;

class DashboardAgency extends Controller {
    public function index(Request $request){
        $order_count = M_orders::count();
        $pay_history = M_pay_history::select('id','price')->get();
        $order_pay_waiting = M_orders::where('status','payed')->where('status_agency','waiting')->select('id','price_total')->get();

        $course_count = M_post::where('post_type_id',5)->count();
        $percen = M_config::where('name','percen_coupon')->first()->value;
        $pay_history_count = M_pay_history::where('user_id',Auth::user()->id)->count();

        // thong bao 
        $cat_noti_config = M_config::where('name','cat_noti')->first();
        $cat_id = $cat_noti_config-> value;
        $noti_count =  M_post::whereHas('f_cat', function($q_cat) use ($cat_id){$q_cat->where('cat_id', $cat_id);})->where('post.status','on')->where('view','0')->orderby('orderby','desc')->count();
        $noti_list =  M_post::whereHas('f_cat', function($q_cat) use ($cat_id){$q_cat->where('cat_id', $cat_id);})->where('post.status','on')->orderby('orderby','desc')->limit(10)->get();
		
        return view('Agency::dashboardAgency',['noti_list'=>$noti_list,'noti_count'=>$noti_count,'pay_history_count'=>$pay_history_count,'percen'=>$percen,'course_count'=>$course_count,'order_count'=>$order_count,'order_pay_waiting'=>$order_pay_waiting,'pay_history'=>$pay_history,'title'=>'']);
   }

}
