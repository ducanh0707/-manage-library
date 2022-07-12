<?php namespace App\Modules\Order\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_orders;
use App\Http\Model\M_tinh;
use App\Http\Model\M_huyen;
use App\Http\Model\M_user_type;
use App\Http\Model\User;
use App\Http\Model\M_post;
use Auth;
use App\Http\Model\M_book;
use App\Http\Model\M_truong;
use App\Http\Model\M_users;
use DB ;
use Carbon\Carbon;

class OrderController extends Controller {
    public function index(Request $request){
        $this->authorize('order_view');
    
        $order = M_orders::orderby('id','desc');
     
        $list_tinh= M_tinh::get();
        $list_huyen= M_huyen::get();
        $list_truong= M_truong::get();
       

        if($request->status){
            $order = $order->where('status',$request->status);
        }
        if($request->search){
            $order = $order->where($request-> search_feild,'like',"%$request->search%");
        }
        $tinh_id = Auth::user()->tinh_id;
        $huyen_id = Auth::user()->huyen_id;
        $tinh_id = Auth::user()->tinh_id;
        $truong_id = Auth::user()->truong_id;
        // so dang nhap
        if(Auth::user()->user_type_id == 2){
            $order = $order->where('tinh_id', $tinh_id);
        }
         //  neu phong dang nhap
        if(Auth::user()->user_type_id == 4){
            $order = $order->where('tinh_id', $tinh_id)->where('huyen_id', $huyen_id);
        }
        //  neu truong dang nhap
        if(Auth::user()->user_type_id == 5){
        
            $order = $order->where('tinh_id', $tinh_id)->where('huyen_id', $huyen_id)->where('truong_id',$truong_id);
        }

        $order = $order->paginate(20);

   
		return view('Order::index',['title'=>'Đơn hàng','list_huyen'=>$list_huyen,'list_truong'=>$list_truong,'list_tinh'=>$list_tinh,'order'=>$order]);
   }

   public function get_ajax_search_id(Request $request, $order_id){
       if($order_id){
            $order = M_orders::where('type','mua')->where('status','buy-waiting')->where('id', 'like',"%$order_id%") ->limit(5)->get();

            if(count($order)>0){
                foreach($order as $val){
                    echo '<li class="select_order" data-order_id="'.$val->id.'" data-price="'.$val->price_total.'" data-book_name="'.$val->f_book->name.'" data-user_id="'.$val->user_id.'" data-user_tel="'.$val->tel.'" data-user_name="'.$val->name.'" style="cursor:pointer">Mã: M_'.$val->id.' - '.$val->name.' - '.$val->tel.'</li>';
                }
            }else{
                echo '<li>Trống</li>';
            }
        }else{
            echo '<li>Trống</li>';
        }
   }

   public function post_order_new(Request $request){
      $this->authorize('order_edit');
      $this -> validate($request,['name' => 'required',],['name.required' => 'Bạn chưa nhập tiêu đề',]);
      $ordzer ->save();

      return redirect() -> back() -> with('alert','Thêm thành công liên hệ');
   }

 
   // sua 
   public function post_order_edit(Request $request,$order_id){
      $this->authorize('order_edit');
      $this -> validate($request,['name' => 'required',],['name.required' => 'Bạn chưa nhập tiêu đề',]);

      $order = M_orders::find($order_id);
      $order -> name = $request -> name;
      $order -> tel = $request -> tel;
      $order -> email = $request -> email;


      $order ->save();
   
      return redirect() -> back() -> with('alert','Sửa thành công liên hệ');
   }

   // xoa 
   public function get_create_user(Request $request,$order_id){
        $order = M_orders::find($order_id);
        if($order->email){
             // check email 
            $email_check = User::where('email',$order->email)->first();
            if($email_check){
                return redirect()->back()->with('alert_error','Email đã tồn tại');
            }   
        }else{
            return redirect()->back()->with('alert_error','Email trong đơn hàng trống');
        }
        $user = new User;
        $user -> email = $order -> email;
        $user -> password = bcrypt('CST@@'.$order->id);
        $user -> user_type_id = '3';
        $user -> remember_token = '';
        $user -> name = $request -> name;
        $user -> tel = $request -> tel;
        $user -> coupon = $request -> tel;
        $user -> status = 'on';
        $user -> save();  
        return redirect() -> back() -> with('alert','Bạn đã thêm thành viên thành công'); 

   }
    public function get_change_status(Request $request,$order_id,$value){
        $this->authorize('order_edit');
        $orders = M_orders::find($order_id);
        $orders -> status = $value;
        

        $book = M_book::find($orders->book_id);

        $so_luong_waiting_old = $book->so_luong_waiting;
        
        if($value  == 'waiting' or $value == 'received' or $value == 'buy-waiting' or $value  == 'done'){
            $book -> so_luong_waiting = $so_luong_waiting_old + 1;
            $book-> save();
            //neu mua xong
            if($value == 'done'){
                $rent_date = Carbon::now();
            }else{
                $rent_date = null;
            }
            $orders -> pay_date = null;
            $orders -> rent_date = $rent_date;
            $orders -> save();
        }

        $user = User::find($orders->user_id);
        $money_waiting_old = $user->money_waiting; // so tien da muon sach
        $price = $orders -> price_total; // gia sách moi muon
        // neu nhan sach
    
        
        if($value  == 'received' ){
            $money_waiting = $price + $money_waiting_old; // tong so tien sach da muon
            $user -> money_waiting =  $money_waiting;
            $money = $user->money; // so tien coc cua taikhoan
            // neu so tien muon sach nhieu hon tong so tien coc 
            if($money_waiting > $money){
                return redirect()->back() -> with('alert_error','Bạn đã mượn sách lớn hơn số tiền cọc, vui lòng đặt thêm tiền cọc');
            }

            $user -> save();
            //them ngay muon
            $orders -> rent_date = Carbon::now();
            $orders -> time_rent = Carbon::now()->addDays(7);

            $orders -> save();
            //them so luot muon sach 
            $count_rent = $book->count_rent;
            $book->count_rent = $count_rent +1;
            $book->save();
        }
        //neu tra sach
        if($value  == 'returned' ){
            $money_waiting = $money_waiting_old - $price; // tong so tien sach da muon
            if($money_waiting < 0){
                $money_waiting = 0;
            }
            $user -> money_waiting =  $money_waiting;
            $user -> save();

            $book -> so_luong_waiting = $so_luong_waiting_old - 1;
            $book-> save();

            $orders -> pay_date = Carbon::now();
            $orders -> save();
        }
        $orders -> save();


        return redirect() -> back() -> with('alert','Bạn đã thay đổi trạng thái thành công');
   }
   
   
   public function post_action(Request $request){
        if($request-> action == 'agency_payed'){
            foreach($request->check as $id){
                $status_agency = M_orders::find($id);
                $status_agency -> status_agency = 'payed';
                $status_agency -> save();
            }
           
        }elseif($request-> action == 'agency_waiting'){
            foreach($request->check as $id){
                $status_agency = M_orders::find($id);
                $status_agency -> status_agency = 'waiting';
                $status_agency -> save();
            }
           
        }
        return redirect() -> back() -> with('alert','Bạn đã thanh đổi thành công');
   }
    public function get_order_del(Request $request,$order_id){
      $this->authorize('order_edit');
      M_orders::where('id',$order_id)->delete();
      
      return redirect() -> back() -> with('alert','Xóa thành công liên hệ');
   }
//    export
public function get_export(Request $request){
    $this->authorize('order_edit');
    $order_list = M_orders::all();
    foreach($order_list  as $key => $row){
        if($row->status == 'done'){
          $status = 'Đã mua';
       }
        elseif($row->status == 'buy-waiting'){
          $status = 'Đang chờ mua';
       }
        elseif($row->status == 'buy-waiting'){
        $status = 'Đang chờ mua';
        }
        elseif($row->status == 'waiting'){
            $status = 'Đang chờ thuê';
        }
        elseif($row->status == 'return'){
            $status = 'Đã trả';
        }
        
        $data[] = array(
            // "ma_lien_he"=> 'M_'.$row->id,
            // "id"=> $row->id,
            "Mã đơn"=> html_entity_decode('M_'.$row->id), 
            "Họ tên"=>  html_entity_decode($row->name), 
            "Điện thoại"=> html_entity_decode((string)($row->tel.' ')),
            "email"=>html_entity_decode($row->email),
            "Sản phẩm"=>html_entity_decode($row->F_book->name),
            "Ghi chú"=>html_entity_decode($row->note),
            "Kiểu "=>html_entity_decode($row->type),
            "Ngày nhận "=>html_entity_decode($row->rent_date),
            "Ngày Ngày Trả "=>html_entity_decode($row->pay_date),
            "Địa chỉ"=>html_entity_decode($row->address),
            "Trạng thái"=>html_entity_decode($status),
            "Ngày"=>$row->created_at,
        );
        }
        // return $data;
    return view('Order::export',['order_list'=>$order_list,'data'=>$data]);
    }
}
