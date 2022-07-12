<?php namespace App\Modules\Tinh\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_tinh;
use App\Http\Model\M_huyen;
use App\Http\Model\M_truong;
use App\Http\Model\M_lop;
use Auth;
use DB;

class TinhController extends Controller {
    public function index($tinh_id){
        $this->authorize('admin_tinh_view');
        

        if($tinh_id == 0){$tinh_id = M_tinh::select('id')->first()->id;}
        $tinh = M_tinh::where('id',$tinh_id)->first();
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
      

        $huyen_list = M_huyen:: orderby('orderby','asc')->where('tinh_id',$tinh->id)->get();

        $title = 'Các huyện của tỉnh/TP '.$tinh->name;
        $page = 'tinh';
        return view('Tinh::index',['page'=>$page,'huyen_list' => $huyen_list,'tinh'=>$tinh,'tinh_list'=>$tinh_list,'tinh_id'=>$tinh_id,'title'=>$title]);
   }

    public function post_tinh_new(Request $request){
        $this->authorize('admin_tinh_edit');
        $max = M_tinh::count();

        $code = str_replace('đ','d',str_replace('Đ','D',$request -> code));
        $check_code = M_tinh::where('code',$code)->first();
        if($check_code){
            return redirect()->bacK()->with('alert_error','Mã trùng lặp');
        }


        $tinh = new M_tinh;
        $tinh -> name = $request -> name; 
        $tinh -> code =  $code;
        $tinh -> status = $request -> status; 
        $tinh -> email = $request -> email; 
        $tinh -> type = $request -> type; 
        $tinh -> tel = $request -> tel; 
        $tinh -> tel_2 = $request -> tel_2; 
        $tinh -> website = $request -> website; 
        $tinh -> address = $request -> address;
        $tinh -> orderby = (int)$max + 1; 
        $tinh -> save();

        $tinh_check = M_tinh::where('url',change_title_to_url($tinh -> name))->first();
        if($tinh_check != ''){
            $tinh -> url = change_title_to_url($tinh -> name).$tinh->id;
        }else{
            $tinh -> url = change_title_to_url($tinh -> name);
        }

       
        $tinh -> save();  

      return redirect('admin/tinh/'.$tinh->id)->with('alert','Bạn đã thêm thành công');
   }

   //sua
    public function post_tinh_edit(Request $request,$id){ 
        $this->authorize('admin_tinh_edit');
        $tinh = M_tinh::find($id);
        
        $tinh -> name = $request -> name; 
        
        $tinh -> status =  $request -> status; 
        $tinh -> orderby = $request -> orderby; 
        $tinh -> email = $request -> email; 
        $tinh -> type = $request -> type; 
        $tinh -> tel = $request -> tel; 
        $tinh -> tel_2 = $request -> tel_2; 
        $tinh -> website = $request -> website; 
        $tinh -> address = $request -> address;
        $tinh -> save();

        $tinh_check = M_tinh::where('url',change_title_to_url($tinh -> name))->first();
        if($tinh_check != ''){
            $tinh -> url = change_title_to_url($tinh -> name).$tinh->id;
        }else{
            $tinh -> url = change_title_to_url($tinh -> name);
        }

        $code = str_replace('đ','d',str_replace('Đ','D',$request -> code));
        $code_check = M_tinh::where('code',$code)->first();
        if( $code_check){
            if($code_check -> id != $id){
                return redirect()->bacK()->with('alert_error','Mã trùng lặp');
            }else{
              $tinh -> code = $code;
            }
        }else{
            $tinh -> code = $code;
        }
       
        $tinh -> save();  

      return redirect()->back()->with('alert','Bạn đã lưu thành công');
   }

   // xoa
    public function get_tinh_del($id){
        $this->authorize('admin_tinh_edit');
        $tinh = M_tinh::find($id);

        $huyen_list = M_truong::where('tinh_id',$id)->get();
        foreach($huyen_list as $huyen){
            $truong_list = M_truong::where('huyen_id',$huyen->id)->get();
            foreach($truong_list as $truong){
                M_lop::where('truong_id',$truong->id)->delete();
            }
            // xoa truong 
            M_truong::where('huyen_id',$id)->delete();
        }
        // xoa huyen 
        M_huyen::where('tinh_id',$id)->delete();
         // xoa tinh 
        M_tinh::where('id',$id)->delete();

        return redirect('admin/tinh/0') -> with('alert','Bạn đã xóa thành công');
      
    }
   //thay doi status
   public function get_change_status($id){
      $this->authorize('admin_tinh_edit');
   
      $tinh = M_tinh::where('id',$id)->first();

      if($tinh -> status == 'off'){
         M_tinh::where('id',$id)->update(['status' => 'on']);
      }
      elseif ($tinh -> status == 'on'){
         M_tinh::where('id',$id)->update(['status' => 'off']);
      }
      return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
   }



    public function post_tinh_edit_local(Request $request){ 
        $code = str_replace('đ','d',str_replace('Đ','D',$request -> code));

        if($request->local_type == 'huyen'){
            $local = M_huyen::find($request->huyen_id);

            $code_check = M_huyen::where('tinh_id',$request ->tinh_id)->where('code',$code)->first();
            if( $code_check){
                if($code_check -> id != $request->huyen_id){
                    return redirect()->bacK()->with('alert_error','Mã trùnglặp');
                }
            }

        }elseif($request->local_type == 'truong'){
            $local = M_truong::find($request->truong_id);

            $code_check = M_truong::where('huyen_id',$request ->huyen_id)->where('code',$code)->first();
            if( $code_check){
                if($code_check -> id != $request->truong_id){
                    return redirect()->bacK()->with('alert_error','Mã trùnglặp');
                }
            }

        }elseif($request->local_type == 'lop'){
            $local = M_lop::find($request->lop_id);
            $code_check = M_lop::where('truong_id',$request -> truong_id)->where('code',$code)->first();
            if( $code_check){
                if($code_check -> id != $request->lop_id){
                    return redirect()->bacK()->with('alert_error','Mã trùnglặp');
                }
            }
        }
        $local -> name = $request->name;
        $local -> url = $request->url;
        $local -> code = $code;
        $local -> email = $request -> email; 
        $local -> type = $request -> type; 
        $local -> tel = $request -> tel; 
        $local -> tel_2 = $request -> tel_2; 
        $local -> website = $request -> website; 
        $local -> address = $request -> address;
        $local -> orderby = $request -> orderby;
        $local -> save();

      return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
   }
}
