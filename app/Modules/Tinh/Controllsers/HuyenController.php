<?php namespace App\Modules\Tinh\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_huyen;
use App\Http\Model\M_tinh;
use App\Http\Model\M_cat;
use App\Http\Model\M_truong;
use Auth;
use DB;

class HuyenController extends Controller {
   public function index($tinh_id,$huyen_id){
      $this->authorize('admin_tinh_view');

      $tinh = M_tinh::where('id',$tinh_id)->first();
      $tinh_list = M_tinh::orderby('orderby','asc')->get();
      $huyen_list = M_huyen:: orderby('orderby','asc')->where('tinh_id',$tinh->id)->get();
      $truong_list = M_truong::orderby('orderby','asc')->where('huyen_id',$huyen_id)->get();
      $huyen = M_huyen::find($huyen_id);

      $title = 'Các trường của quận/huyện '.$huyen->name;
      $page = 'huyen';
      return view('Tinh::index',['page'=>$page,'truong_list'=>$truong_list,'huyen_list' => $huyen_list,'huyen_id'=>$huyen_id,'tinh'=>$tinh,'tinh_list'=>$tinh_list,'tinh_id'=>$tinh_id,'title'=>$title]);
   }


   public function post_huyen_ajax(Request $request,$tinh_id){

      $this->authorize('admin_tinh_edit');

      foreach($request -> list as $key => $huyen_1){
         M_huyen:: where('id',$huyen_1['id']) -> update(['orderby' => $key+1]);
         
      }
   }
   
   public function post_huyen_new_multi(Request $request,$tinh_id){
      $this->authorize('admin_tinh_edit');
       $tinh = M_tinh::find($tinh_id);
      $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập menu']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
        foreach($val_array as $val){
            $huyen = new M_huyen;
            $huyen -> name = $val;
            $huyen -> url = change_title_to_url($val);
            $huyen -> tinh_id =$tinh_id;
            $huyen -> status = 'on';
            $huyen -> save();
        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
   }

    public function post_huyen_new(Request $request,$tinh_id){
        $this->authorize('admin_tinh_edit');
        $this -> validate($request,
            [
                'name' => 'max:100',
            ],
            [
                'name.max' => 'Tên thể danh mục có độ dài từ 1 đến 100 ký tự',
            ]);
    
        $max = M_huyen::where('tinh_id',$tinh_id)->count();
        $code_check = M_huyen::where('tinh_id',$tinh_id)->where('code',$request -> code)->first();
        if($code_check){
            return redirect()->bacK()->with('alert_error','Mã trùng lắp');
        }
            
        $huyen_type = M_tinh::find($tinh_id);
        //them moi menu vao bang cat
        $huyen = new M_huyen;
        $huyen -> name = $request -> name;
        $huyen -> url = change_title_to_url($request -> name);
        $huyen -> tinh_id = $tinh_id;
        $huyen -> code = $request ->code;
        $huyen -> status = 'on';
        $huyen -> orderby =  $max+1;  
        
        $huyen -> save();

      return redirect()->back() -> with('alert','Thêm thành công');
   }
   
    public function get_huyen_del($tinh_id,$id){

        $this->authorize('menu_edit');
        $truong_list = M_truong::where('huyen_id',$id)->get();
        foreach($truong_list as $truong){
            // xoa lop  
            M_lop::where('truong_id',$truong->id)->delete();
        }
        M_truong::where('huyen_id',$id)->delete();
        M_huyen::where('id',$id)->delete();
        
    	return redirect()->back() -> with('alert','Bạn đã xóa thành công');
    }

   //thay doi status
   public function get_change_status($tinh_id,$id){
      $this->authorize('menu_edit');
      $huyen = M_huyen::where('id',$id)->first();
   
      if($huyen -> status == 'on'){
         M_huyen::where('id',$id)->update(['status' => 'off']);
      }else{
         M_huyen::where('id',$id)->update(['status' => 'on']);
      }
      return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
   }//ket thuc doi status
}
