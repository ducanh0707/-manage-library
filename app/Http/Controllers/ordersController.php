<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use App\Http\Model\M_book;
use App\Http\Model\M_company;
use App\Http\Model\M_orders;
use App\Http\Model\M_store;
use App\Http\Model\User;
use Auth;

use function PHPSTORM_META\type;

class ordersController extends BaseController
{

   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function post_orders(Request $request){
        $book = M_book::find($request->book_id );

        if($book == ''){ return view('errors.404');  }

        $val_orders = new M_orders();
      
        $val_orders -> type = $request ->type;
        $val_orders -> name  =  Auth::user()->name;
        $val_orders -> email =  Auth::user()->email;
        $val_orders -> user_id =  Auth::user()->id;
        $val_orders -> tel =  Auth::user()->tel;
        $val_orders -> tinh_id =  Auth::user()->tinh_id;
        $val_orders -> huyen_id =  Auth::user()->huyen_id;
        $val_orders -> truong_id =  Auth::user()->truong_id;
        
        $store = M_store::where('tinh_id',Auth::user()->tinh_id)->first();
        // if(!$store){
        //     return redirect('');
        // }
        $val_orders -> store_id =  $store -> id;
        $val_orders -> address =  $request -> address;

        $val_orders -> book_id =  $book -> id;
        $val_orders -> price_total =  $book -> price ;
        $val_orders -> status = 'buy-waiting';
        $val_orders -> note = $request -> note;
        $val_orders -> coupon = $request -> coupon;
    
        if($request -> type == 'thue'){
            $alert = 'Đặt thuê thành công';
            $val_orders -> status = 'waiting';
           
            $money = Auth::user()->money; // so tien coc cua taikhoan
            $money_waiting_old =Auth::user()->money_waiting; // so tien da muon sach

            $price = $book -> price_total; // gia sách mới mượn
            $money_waiting = $price + $money_waiting_old; // tong so tien sach da muon
           
            //neu tong so tien sach da muon lon hon so tien coc
            if($money_waiting > $money){
                return redirect($request->urlCurrent.'#ModalAlert') -> with('alert_error','Bạn 1 đã mượn sách lớn hơn số tiền cọc, vui lòng đặt thêm tiền cọc');
            }

        }else{
            $val_orders -> status = 'buy-waiting';
            $alert = 'Đặt mua thành công';
        }

        $val_orders -> save();

        $so_luong_waiting_old = $book -> so_luong_waiting;
        $book -> so_luong_waiting = $so_luong_waiting_old + 1;
        $book -> save();
        
        return redirect($request->urlCurrent.'#ModalAlert')->with('alert',$alert);
    }
   
     
}
