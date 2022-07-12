<?php namespace App\Modules\Accountant\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_ke_toan;
use App\Http\Model\User;
use App\Http\Model\M_orders;
use App\Http\Model\M_users;
use Auth;
use DB;
use Carbon\Carbon;


class AccountantController extends Controller {

    public function index(Request $request) {
        $this->authorize('accountant_view');
 
        $accountant = M_ke_toan::orderby('created_at', 'desc');
        
        if($request -> type != ''){
            $accountant = $accountant->where('type',$request->type);
        }
         
        if($request -> starTime){
            $from =  Carbon::createFromFormat('d-m-Y',$request -> starTime)->format('Y-m-d');
            if($request -> endTime){
                $to =  Carbon::createFromFormat('d-m-Y',$request -> endTime)->addDays(1)->format('Y-m-d');
            }else{
                $to = Carbon::now()->addDays(1);
            }
            $accountant = $accountant->whereBetween('created_at', [$from, $to]);
        }

        

        $accountant = $accountant->get();
      
        return view('Accountant::index', ['title'=>'Kế toán','accountant'=> $accountant]);
    }
    public function get_accountant_edit($accountant_id)
    {
        
      $accountant = M_ke_toan::where('id',$accountant_id)->first();
        $type= $accountant->type;
        if($type=='deposits'){
            return view('Accountant::IV_edit_deposits', ['title'=>'Kế toán','accountant'=> $accountant]);
        }elseif($type=='buy'){
            return view('Accountant::IV_edit_buy', ['title'=>'Kế toán','accountant'=> $accountant]);
        }else{
            return view('Accountant::IV_edit_service', ['title'=>'Kế toán','accountant'=> $accountant]);
        }
       
    }
// sửa
    public function post_accountant_edit(Request $request, $accountant_id) {
        $this->authorize('accountant_edit');
        // $cat = M_cat::orderby('id', 'desc')->get();
        $accountant = M_ke_toan::find($accountant_id);
        
        
        $user_id= $accountant->user_id;
        $user = M_users::find($user_id);
        $money_old=$user->money;
        $money= $accountant -> money ;
        $user -> money = $money_old - $money;
       
        $accountant->money= $request->money;
        $money_old1 = $user -> money;
        $money_new1 = $accountant -> money;
        $user -> money =  $money_old1 + $money_new1;
      
        $user -> save();


        if($accountant->type ='service'){
            $startTime = Carbon::parse($request -> startTime);
            $startTime = $startTime -> format('Y-m-d');
            $accountant -> startTime =  $startTime;
            if(!$accountant -> startTime ){

            $endTime = Carbon::parse($request -> endTime);
            $endTime = $endTime -> format('Y-m-d');
            $accountant -> endTime =  $endTime;
            $accountant -> buyTime = null;
            $accountant -> save();
            }
          
        }
        elseif($accountant->type ='buy' or $accountant->type ='deposits'){
          
                $buyTime = Carbon::parse($request -> buyTime);
                $buyTime = $buyTime -> format('Y-m-d');
                $accountant -> buyTime =  $buyTime;
                $accountant -> endTime = null;  
                $accountant -> startTime = null;
        $accountant -> save();

        }
        // $accountant -> buyTime = $buyTime;
        $accountant -> save();
        return redirect()->back() ->with('alert', 'Sửa thành công');
    }
    // xoa
    public function get_accountant_del(Request $request,$accountant_id){
        $this->authorize('accountant_edit');

        $accountant =  M_ke_toan::where('id',$accountant_id)->first();
        $user_id= $accountant->user_id;
        $user = M_users::find($user_id);
        $money_old=$user->money;
        $money= $accountant -> money ;
        $user -> money = $money_old - $money;
        $accountant -> save();
        $user -> save();



        if($accountant->status = 'on')
        $accountant->delete();
  
        return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
    }
 
    public function post_deposits_new(Request $request) {
        $this->authorize('accountant_edit');
        
        $user = User::find($request -> user_id);
        if($user == ''){
            return redirect()->back() ->with('alert_error', 'Sai mã thành viên');
        }
        
        $ke_toan = new  M_ke_toan;

        $ke_toan -> money =  $request -> money;
        $ke_toan -> status = 'on';
        $ke_toan -> type = 'deposits';
        $ke_toan -> user_id = $user->id;
        $ke_toan -> tinh_id = $user->tinh_id;
        $ke_toan -> huyen_id = $user->huyen_id;
        $ke_toan -> truong_id = $user->truong_id;

        if($request -> startTime == ''){
            $starTime = Carbon::now();
        }else{
            $starTime = Carbon::createFromFormat('d-m-Y',$request -> startTime)->format('Y-m-d');
        }
        if($request -> endTime == ''){
            $endTime = Carbon::now();
        }else{
            $endTime = Carbon::createFromFormat('d-m-Y',$request -> endTime)->format('Y-m-d');
        }


        $ke_toan -> startTime = $starTime;
        $ke_toan -> endTime = $endTime;
        $ke_toan -> save();

        $money_old = $user -> money;
        $money_new = $ke_toan -> money;


        $user -> money =  $money_old + $money_new;
        $user -> save();
        
        return redirect()->back() ->with('alert', 'Thêm thành công');
    }
    public function post_service_new(Request $request) {
        $this->authorize('accountant_edit');
        
        $user = User::find($request -> user_id);
        if($user == ''){
            return redirect()->back() ->with('alert_error', 'Sai mã thành viên');
        }
        
        $ke_toan = new  M_ke_toan;

        $ke_toan -> money =  $request -> money;
        $ke_toan -> status = 'on';
        $ke_toan -> type = 'service';
        $ke_toan -> user_id = $user->id;
        $ke_toan -> tinh_id = $user->tinh_id;
        $ke_toan -> huyen_id = $user->huyen_id;
        $ke_toan -> truong_id = $user->truong_id;

        $ke_toan -> user_id = $user->id;

        if($request -> endTime == ''){
            return redirect()->back() ->with('alert_error', 'Thời hạn không được trống');
        }
        $endTime = Carbon::createFromFormat('d-m-Y',$request -> endTime)->format('Y-m-d');
        // $starTime = Carbon::createFromFormat('d-m-Y',$request -> starTime)->format('Y-m-d');

        if($request -> startTime == ''){
            $starTime = Carbon::now();
        }else{
            $starTime =  $ke_toan -> startTime;
        }

        $ke_toan -> startTime = $starTime;
        $ke_toan -> endTime = $endTime;

      
        $user -> save();
        $ke_toan -> save();
        
        return redirect()->back() ->with('alert', 'Thêm thành công');
    }

    public function post_buy_new(Request $request) {
        $this->authorize('accountant_edit');
        
        $order = M_orders::find($request ->order_id);
        if($order == ''){
            return redirect()->back() ->with('alert_error', 'Sai mã đơn hàng');
        }
     
        $user = User::find($order -> user_id);
        if($user == ''){
            return redirect()->back() ->with('alert_error', 'Sai mã thành viên');
        }
        
        $ke_toan = new  M_ke_toan;

        $ke_toan -> money = $order -> price_total;

        $ke_toan -> status = 'on';
        $ke_toan -> type = 'buy';
        $ke_toan -> user_id = $user->id;
         
        $ke_toan -> save();

        $order -> status = 'done';
        $order -> save();
        
        return redirect()->back() ->with('alert', 'Thêm thành công');
    }

}
