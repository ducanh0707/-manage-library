<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_bank;
use App\Http\Model\M_pay_history;
use App\Http\Model\M_config;
use App\Http\Model\User;
use Auth;
use DB;

class BillAgency extends Controller {
    public function index(Request $request){
        
        $pay_limit = M_config::where('name','pay_limit')->first();
        $discount = M_config::where('type','discount')->get();
        $user = User::find(Auth::user()->id);
		return view('Agency::billAgency',['user'=>$user,'discount'=>$discount,'pay_limit'=>$pay_limit,'title'=>'Thanh toán']);
    }
    public function get_bank(Request $request){
        
        $bank_list = M_bank::where('user_id',Auth::user()->id)->get();
   
		return view('Agency::bankAgency',['bank_list'=>$bank_list,'title'=>'Ngân hàng']);
    }

    public function post_add_bank(Request $request){

        $bank = new M_bank;
        $bank -> user_id = Auth::user()->id;
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
    public function post_edit_bank(Request $request,$id){

        $bank = M_bank::where('user_id',Auth::user()->id)->where('id',$id)->first();
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


    public function get_del_bank(Request $request,$id){
        
        M_bank::where('user_id',Auth::user()->id)->where('id',$id)->delete();
   
		return redirect()->back()->with('alert','Bạn đã xóa thành công');
    }
    public function get_history(Request $request){
        $pay_history = M_pay_history::paginate(20);

		return view('Agency::payhistoryAgency',['pay_history'=>$pay_history,'title'=>'Lịch sử thanh toán']);
    }

}
