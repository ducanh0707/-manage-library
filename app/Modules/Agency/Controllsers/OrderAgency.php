<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_orders;
use App\Http\Model\M_tinh;
use App\Http\Model\User;
use App\Http\Model\M_post;
use Auth;
use DB;

class OrderAgency extends Controller {
    public function index(Request $request){
        $this->authorize('agency_order_view');
    
        $order = M_orders::orderby('id','desc');
        $order->where('coupon',Auth::user()->coupon);

        if($request->status){
            $order = $order->where('status',$request->status);
        }
        if($request->search){
            $feil = $request -> search_feild;
            if($request -> search_feild == 'coupon'){
                $order = $order->where($feil,$request->search);
            }else{
                $order = $order->where($feil,'like',"%$request->search%");
            }
        }
        if($request->status_agency){
            $order = $order->where('status_agency',$request->status_agency);
        }
       
        $order = $order->paginate(20);

   
		return view('Agency::orderAgency',['title'=>'Danh sách liên hệ','order'=>$order]);
   }

}
