<?php namespace App\Modules\Tinh\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_lop;
use App\Http\Model\M_tinh;
use App\Http\Model\M_cat;
use App\Http\Model\M_huyen;
use App\Http\Model\User;
use App\Http\Model\M_truong;
use Auth;
use DB;

class LopController extends Controller {
    public function index($tinh_id,$huyen_id,$truong_id,$lop_id){
        $this->authorize('admin_tinh_view');
  
        $tinh = M_tinh::where('id',$tinh_id)->first();
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        $huyen_list = M_huyen:: orderby('orderby','asc')->where('tinh_id',$tinh->id)->get();
        $truong_list = M_truong::orderby('orderby','asc')->where('huyen_id',$huyen_id)->get();
        $lop_list = M_lop::orderby('orderby','asc')->where('truong_id',$truong_id)->get();
        $huyen = M_huyen::find($huyen_id);
        $truong = M_truong::find($truong_id);
        $user_list = User::where('lop_id',$lop_id)->get();
        if(isset($truong->name)){
            $truong_name = $truong->name;
        }else{
            $truong_name = '';
        }
        $title = 'Các lớp của trường '.$truong_name;
        $page = 'lop';
          
        return view('Tinh::index',['user_list'=>$user_list,'page'=>$page,'lop_id'=>$lop_id,'lop_list'=>$lop_list,'truong_list'=>$truong_list,'huyen_list' => $huyen_list,'huyen_id'=>$huyen_id,'truong_id'=>$truong_id,'tinh'=>$tinh,'tinh_list'=>$tinh_list,'tinh_id'=>$tinh_id,'title'=>$title]);
    }
   
    public function post_lop_new_multi(Request $request,$tinh_id,$huyen_id,$truong_id){
      $this->authorize('admin_tinh_edit');
     
      $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập menu']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
       
        foreach($val_array as $val){
         $max = M_lop::where('huyen_id',$huyen_id)->count();
            $lop = new M_lop;
            $lop -> name = $val;
            $lop -> url = change_title_to_url($val);
            $lop -> tinh_id = $tinh_id;
            $lop -> huyen_id = $huyen_id;
            $lop -> truong_id = $truong_id;
            $lop -> orderby = $max+1;
            $lop -> status = 'on';
            $lop -> save();

            //code 
            $lop_explode = explode(' ',$val);
            $ky_tu = '';
            foreach($lop_explode as $tx){
                $ky_tu .= mb_substr($tx, 0, 1);;
            }
            $code = str_replace('đ','d',str_replace('Đ','D',$ky_tu));
            $code = str_replace('ư','u',str_replace('Ư','U',$ky_tu));
            $check_code = M_lop::where('code',$code)->where('truong_id',$truong_id)->first();
            if($check_code){
                $code = $code.$lop->id;
            }
            $lop -> code = $code;
            $lop -> save();

        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
   }

   
   public function get_lop_del($tinh_id,$huyen_id,$truong_id,$id){

      $this->authorize('menu_edit');
      M_lop::where('id',$id)->delete();
      
    	return redirect()->back() -> with('alert','Bạn đã xóa thành công');
   }

   //thay doi status
   public function get_change_status($tinh_id,$huyen_id,$truong_id,$id){
      $this->authorize('menu_edit');
      $lop = M_lop::where('id',$id)->first();
   
      if($lop -> status == 'on'){
         M_lop::where('id',$id)->update(['status' => 'off']);
      }else{
         M_lop::where('id',$id)->update(['status' => 'on']);
      }
      return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
   }//ket thuc doi status
}
