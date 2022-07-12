<?php namespace App\Modules\Pay\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
use App\Http\Model\M_user_type;
use App\Http\Model\M_pay_history;
use App\Http\Model\M_config;
use App\Http\Model\M_bank;
use Auth;
use DB;

class PayController extends Controller {
    public function index(Request $request){
        $this->authorize('pay_view');
        $user_type = M_user_type::where('url','agency')->first();
        $pay_limit = M_config::where('name','pay_limit')->first();
        $user_list = User::where('user_type_id',$user_type->id);
        if($request -> target == 'ok'){
            $user_list = $user_list -> whereHas('F_order_agency_waiting', function($q_order) use ($order){$q_order->where('cat_id', $cat ->id);});
        }
        if($request->search){
            $feil = $request -> search_feild;
            if($request -> search_feild == 'coupon'){
               $user_list = $user_list->where($feil,$request->search);
            }else{
               $user_list = $user_list->where($feil,'like',"%$request->search%");
            }
        }
        
        $user_list = $user_list->paginate(20);
        $discount = M_config::where('type','discount')->get();

		return view('Pay::pay',['user_type'=>$user_type,'pay_limit'=>$pay_limit,'discount'=>$discount,'user_list'=>$user_list,'title'=>'Thanh toán']);
   }
    public function post_payed(Request $request,$user_id){
        $this->authorize('pay_edit');
        $user = User::find($user_id);
        // chuyen doi don thanh toan 
        foreach($user->F_order_agency_waiting as $waiting){
            $waiting -> status_agency = 'payed';
            $waiting -> save();
        }
        // tao lich su
        $pay_history = new M_pay_history;
        $pay_history -> user_id = $user_id;
        $pay_history -> price = $request -> price;
        $pay_history -> count_order = $user->F_order_agency_waiting->count();
        $pay_history -> status = 'payed';
        $pay_history -> note = $request -> note;
        $pay_history -> price_sales = $user->F_order_agency_waiting->sum('price_total');
        $pay_history -> percen = $request -> percen;
        $pay_history -> bank_id = $request -> bank_id;
        $pay_history -> user_pay = Auth::user()->id;
        $pay_history ->  save();

		return redirect()->back()->with('alert','Bạn đã thanh toán thành công');
    }
    

    public function get_history(Request $request){
        $this->authorize('pay_edit');
        $pay_history = M_pay_history::paginate(20);
		return view('Pay::history',['pay_history'=>$pay_history,'title'=>'Lịch sử thanh toán']);
    }
    

    public function get_history_del(Request $request, $id){
        $this->authorize('pay_edit');
        M_pay_history::where('id',$id)->delete();
     

		return redirect()->back()->with('alert','Bạn đã xóa thành công');
    }

    // ngan hang 
    public function get_bank(Request $request){
        $this->authorize('pay_edit');
        $bank = M_bank::orderby('id','desc');
        if($request->search){
            $feil = $request -> search_feild;
            if($request -> search_feild == 'coupon'){
                $bank = $bank->where($feil,$request->search);
            }else{
                $bank = $bank->where($feil,'like',"%$request->search%");
            }
        }

        $bank = $bank->paginate(20);
     
		return view('Pay::bank',['bank'=>$bank,'title'=>'Tài khoản ngân hàng']);
    }

    public function post_add_bank(Request $request,$user_id){
        $this->authorize('pay_edit');
        $bank = new M_bank;
        $bank -> user_id = $request-> user_id;
        $bank -> so_tai_khoan = $request-> so_tai_khoan;
        $bank -> ten_tai_khoan = $request-> ten_tai_khoan;
        $bank -> ngan_hang = $request-> ngan_hang;
        $bank -> chi_nhanh = $request-> chi_nhanh;
        $bank -> ghi_chu = $request-> ghi_chu;
        $bank -> status = $request-> status;
        $bank -> main = $request->main;
        $bank ->  save();

		return redirect()->back()->with('alert','Bạn đã  thêm thành công');
    }
    public function post_edit_bank(Request $request,$user_id,$id){
        $this->authorize('pay_edit');
        $bank = M_bank::find($id);
        $bank -> user_id = $request-> user_id;
        $bank -> so_tai_khoan = $request-> so_tai_khoan;
        $bank -> ten_tai_khoan = $request-> ten_tai_khoan;
        $bank -> ngan_hang = $request-> ngan_hang;
        $bank -> chi_nhanh = $request-> chi_nhanh;
        $bank -> ghi_chu = $request-> ghi_chu;
        $bank -> status = $request-> status;
        $bank -> main = $request->main;
        $bank ->  save();

		return redirect()->back()->with('alert','Bạn đã  thêm thành công');
    }

    public function get_bank_del(Request $request, $id){
        $this->authorize('pay_edit');
        M_bank::where('id',$id)->delete();
     

		return redirect()->back()->with('alert','Bạn đã xóa thành công');
    }

}
