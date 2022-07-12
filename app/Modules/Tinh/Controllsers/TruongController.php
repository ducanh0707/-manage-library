<?php namespace App\Modules\Tinh\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_truong;
use App\Http\Model\M_tinh;
use App\Http\Model\M_cat;
use App\Http\Model\M_huyen;
use App\Http\Model\M_lop;
use Auth;
use DB;

class TruongController extends Controller {
   public function index($tinh_id,$huyen_id,$truong_id){
      $this->authorize('admin_tinh_view');

        $tinh = M_tinh::where('id',$tinh_id)->first();
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        $huyen_list = M_huyen:: orderby('orderby','asc')->where('tinh_id',$tinh->id)->get();
        $truong_list = M_truong::orderby('orderby','asc')->where('huyen_id',$huyen_id)->get();
        $lop_list = M_lop::orderby('orderby','asc')->where('truong_id',$truong_id)->get();
        $huyen = M_huyen::find($huyen_id);
        $truong = M_truong::find($truong_id);
        
        if(isset($truong->name)){
            $truong_name = $truong->name;
        }else{
            $truong_name = '';
        }
        $title = 'Các lớp của trường '.$truong_name;
        $page = 'truong';
      return view('Tinh::index',['page'=>$page,'lop_list'=>$lop_list,'truong_list'=>$truong_list,'huyen_list' => $huyen_list,'huyen_id'=>$huyen_id,'truong_id'=>$truong_id,'tinh'=>$tinh,'tinh_list'=>$tinh_list,'tinh_id'=>$tinh_id,'title'=>$title]);
   }

   public function post_truong_ajax(Request $request,$tinh_id,$huyen_id){

      $this->authorize('admin_tinh_edit');

      foreach($request -> list as $key => $truong_1){
         M_truong:: where('id',$truong_1['id']) -> update(['orderby' => $key+1]);
         
      }
   }

   
   public function post_truong_new_multi(Request $request,$tinh_id,$huyen_id){
      $this->authorize('admin_tinh_edit');
     
      $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập menu']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
        
        foreach($val_array as $val){
            $max = M_truong::where('huyen_id',$huyen_id)->count();
            $truong = new M_truong;
            $truong -> name = $val;
            $truong -> url = change_title_to_url($val);
            $truong -> tinh_id = $tinh_id;
            $truong -> huyen_id = $huyen_id;
            $truong -> email = $request -> email; 
            $truong -> type = $request -> type; 
            $truong -> tel = $request -> tel; 
            $truong -> tel_2 = $request -> tel_2; 
            $truong -> website = $request -> website; 
            $truong -> address = $request -> address;
            
            $truong -> orderby = $max+1;
            $truong -> status = 'on';
            $truong -> save();

            //code 
            $truong_explode = explode(' ',$val);
            $ky_tu = '';
            foreach($truong_explode as $tx){
                $ky_tu .= mb_substr($tx, 0, 1);;
            }
            $code = str_replace('đ','d',str_replace('Đ','D',$ky_tu));
            $code = str_replace('ư','u',str_replace('Ư','U',$ky_tu));
            $check_code = M_truong::where('code',$code)->where('huyen_id',$huyen_id)->first();
            if($check_code){
                $code = $code.$truong->id;
            }
            $truong -> code = $code;
            $truong -> save();
        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
   }

   
   public function get_truong_del($tinh_id,$huyen_id,$id){
        $this->authorize('menu_edit');
        // xoa lop 
        M_lop::where('truong_id',$id)->delete();
        M_truong::where('id',$id)->delete();
      
    	return redirect()->back() -> with('alert','Bạn đã xóa thành công');
   }

   //thay doi status
   public function get_change_status($tinh_id,$huyen_id,$id){
      $this->authorize('menu_edit');
      $truong = M_truong::where('id',$id)->first();
   
      if($truong -> status == 'on'){
         M_truong::where('id',$id)->update(['status' => 'off']);
      }else{
         M_truong::where('id',$id)->update(['status' => 'on']);
      }
      return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
   }//ket thuc doi status
}
