<?php
namespace App\Modules\Coupon\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_config;
use Auth;

class CouponController extends Controller{

    public function index(Request $request){
        $percen_coupon = M_config::where('name','percen_coupon')->first();
        $noti_coupon = M_config::where('name','noti_coupon')->first();
        $discount_1 = M_config::where('name','percen_discount_1')->first();
        $discount_2 = M_config::where('name','percen_discount_2')->first();
        $discount_3 = M_config::where('name','percen_discount_3')->first();
        $discount_4 = M_config::where('name','percen_discount_4')->first();
        $content_coupon = M_config::where('name','content_coupon')->first();
        $pay_limit = M_config::where('name','pay_limit')->first();

        return view('Coupon::index',['pay_limit'=>$pay_limit,'content_coupon'=>$content_coupon,'discount_1'=>$discount_1,'discount_2'=>$discount_2,'discount_3'=>$discount_3,'discount_4'=>$discount_4,'noti_coupon'=>$noti_coupon,'percen_coupon'=>$percen_coupon,'title'=>'Hoa hồng']);
    }
    public function post_coupon(Request $request){ 
        M_config::where('name','percen_coupon')->update(['value'=>$request->percen_coupon]);
        M_config::where('name','noti_coupon')->update(['value'=>$request->noti_coupon]);
        M_config::where('name','percen_discount_1')->update([ 'from_sp'=>$request->discount_1['from_sp'],'to_sp'=>$request->discount_1['to_sp'],'value'=> $request->discount_1['value']]);
        M_config::where('name','percen_discount_2')->update([ 'from_sp'=>$request->discount_2['from_sp'],'to_sp'=>$request->discount_2['to_sp'],'value'=> $request->discount_2['value']]);
        M_config::where('name','percen_discount_3')->update([ 'from_sp'=>$request->discount_3['from_sp'],'to_sp'=>$request->discount_3['to_sp'],'value'=> $request->discount_3['value']]);
        M_config::where('name','percen_discount_4')->update([ 'from_sp'=>$request->discount_4['from_sp'],'to_sp'=>$request->discount_4['to_sp'],'value'=> $request->discount_4['value']]);
        M_config::where('name','content_coupon')->update(['value'=>$request->content_coupon]);
        M_config::where('name','pay_limit')->update(['value'=>$request->pay_limit]);

        return redirect()->back()->with('alert','Bạn đã sửa thành công');
    }
}