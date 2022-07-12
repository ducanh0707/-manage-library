<?php namespace App\Modules\AdminUser\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_domain;
use App\Http\Model\User;
use App\Http\Model\M_user_type;
use App\Http\Model\M_theme;
use App\Http\Model\M_tinh;
use App\Http\Model\M_huyen;
use App\Http\Model\M_level;
use App\Http\Model\M_truong;
use App\Http\Model\M_lop;
use App\Http\Model\M_org;
use App\Http\Model\M_position;
use Auth;
use DB;
use Carbon\Carbon;

class AdminUserController extends Controller {
    public function index($parent_id){
        $this->authorize('admin_user_view');
        $user_type = M_user_type::where('parent_id',$parent_id)->get();
        $parent = M_user_type::find($parent_id);
       
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
       
        return view('AdminUser::index',['tinh_list'=>$tinh_list,'parent'=>$parent,'parent_id'=>$parent_id,'title'=>'Danh sách quyền thành viên','user_type'=>$user_type]);
    }
    

    public function get_user_list(Request $request,$type_id,$user_parent_id){
        $this->authorize('admin_user_view');
        $type = M_user_type::find($type_id);
        $user_type = M_user_type::all();

        $user = User::orderBy('created_at','desc')->where('user_type_id',$type_id)->where('parent_id',$user_parent_id);
        if($request->search){
            $user = User::orderBy('created_at','desc')->where('user_type_id',$type_id);
            $feil = $request -> search_feild;
            if($request -> search_feild == 'coupon'){
                $user = $user->where($feil,$request->search);
            }else{
                $user = $user->where($feil,'like',"%$request->search%");
            }
        }else{
            $user = User::orderBy('created_at','desc')->where('user_type_id',$type_id)->where('parent_id',$user_parent_id);
        }
        if($request->account_type){
            $user = $user->where('account_type',$request->account_type);
        }
        if($request->tinh_id){
            $user = $user->where('tinh_id',$request->tinh_id);
        }
        if($request->huyen_id){
            $user = $user->where('huyen_id',$request->huyen_id);
        }
        if($request->truong_id){
            $user = $user->where('truong_id',$request->truong_id);
        }
        if($request->lop_id){
            $user = $user->where('lop_id',$request->lop_id);
        }
        if($request->level_id){
            $user = $user->where('level_id',$request->level_id);
        }
        if($request->position_id){
            $user = $user->where('position_id',$request->position_id);
        }


        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        $level_list = M_level::get();
        $position_list = M_position::get();
        $user_parent = User::find($user_parent_id);
        
        $user = $user ->paginate(25);
        $title = 'Thành viên - '.$type->name;
     
      return view('AdminUser::user_list',['user_parent_id'=>$user_parent_id,'user_parent'=>$user_parent,'position_list'=>$position_list,'level_list'=>$level_list,'tinh_list'=>$tinh_list,'type_id'=>$type_id,'title'=>$title,'type'=>$type,'user'=>$user,'user_type'=>$user_type]);
    }

    public function get_user_new (Request $request,$type_id,$user_parent_id){
        $this->authorize('admin_user_view');
        $type = M_user_type::find($type_id);
        $user_type = M_user_type::all();

       
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        $level_list = M_level::get();

        $position_list = M_position::get();
        $title = 'Thêm mới đại lý tổ chức';
   

        return view('AdminUser::user_agency_new',['user_parent_id'=>$user_parent_id,'position_list'=>$position_list,'level_list'=>$level_list,'tinh_list'=>$tinh_list,'type_id'=>$type_id,'title'=>$title,'type'=>$type,'user_type'=>$user_type]);
    }
    public function get_user_edit (Request $request,$type_id,$user_parent_id,$id){
        $this->authorize('admin_user_view');
        $type = M_user_type::find($type_id);
        $user_type = M_user_type::all();

       
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        $org_list = M_org::get();
        $level_list = M_level::get();

        $position_list = M_position::get();
        $title = 'Sửa đại lý tổ chức';
        $user = User::find($id);
        if($user != ''){
            if($user->tinh_id != ''){
                $huyen_list = M_huyen::where('tinh_id',$user->tinh_id)->get();
                // truong 
                if(count($huyen_list)>0){
                    $truong_list = M_truong::where('huyen_id',$user->huyen_id)->get();

                    if(count($truong_list)>0){
                        $lop_list = M_lop::where('truong_id',$user->truong_id)->get();
                    }else{
                        $lop_list[] = '';
                    }

                }else{
                    $truong_list[] = '';
                    $lop_list[] = '';
                }
            }else{
                $huyen_list[] = '';
                $truong_list[] = '';
                $lop_list[] = '';
            }
        }

        return view('AdminUser::user_agency_edit',['lop_list'=>$lop_list,'truong_list'=>$truong_list,'org_list'=>$org_list,'user_parent_id'=>$user_parent_id,'huyen_list'=>$huyen_list,'user'=>$user,'position_list'=>$position_list,'level_list'=>$level_list,'tinh_list'=>$tinh_list,'type_id'=>$type_id,'title'=>$title,'type'=>$type,'user_type'=>$user_type]);
    }
    public function post_user_new (Request $request,$type_id){
        $this->authorize('admin_user_edit');
         $this -> validate($request,
            [
                'email' => 'required|unique:users,email',
                'tel' => 'required|unique:users,tel',
                'password' => 'required|min:6|max:38',
                'name' => 'required|min:2|max:38',
                'password_again' => 'required|same:password',
                'img' => 'mimes:jpeg,bmp,png|max:2000',
            ],
            [
                'email.required' => 'Bạn chưa nhập email thành viên',
                'email.unique' => 'Email thành viên đã tồn tại',
                'email.email' => 'Bạn phải nhập đúng định dạng email ví dụ: info@webux.vn',

                'tel.required' => 'Bạn chưa nhập số điện thoại thành viên',
                'tel.unique' => 'Số điện thoại thành viên đã tồn tại',
                'tel.number' => 'Bạn phải nhập đúng định dạng số điện thoại',

                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải từ 6 đến 38 ký tự',
                'password.max' => 'Mật khẩu phải từ 6 đến 38 ký tự',

                'name.required' => 'Bạn chưa nhập họ tên',
                'name.min' => 'Họ tên quá ngắn, họ tên từ 2 - 38 ký tự',
                'name.max' => 'Họ tên quá dài, họ tên từ 2 - 38 ký tự',

                'password_again.required' => 'Bạn chưa nhập lại mật khẩu',
                'password_again.same' => 'Mật khẩu nhập lại chưa khớp',
                'img.mimes' => 'Ảnh phải có định dạng jpeg, bmp,png',
                'img.max' => '',
            ]);
        if($request->coupon != ''){
            $this -> validate($request,
                ['coupon' => 'unique:users,coupon'],
                ['coupon.unique' => 'Mã giảm giá đã tồn tại']);
        }

        $user = new User;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> user_type_id = $type_id;
        $user -> remember_token = $request -> _token;
        $user -> name = $request -> name;
        $user -> tel = $request -> tel;
        $user -> status = $request -> status;
        $user -> tinh_id = $request -> tinh_id;
        $user -> huyen_id = $request -> huyen_id;
        $user -> position_id = $request -> position_id;
        $user -> level_id = $request -> level_id;
        $user -> parent_id = $request -> parent_id;
        $user -> coupon = $request -> coupon;
        $user -> note = $request -> note;
        $user -> truong_id = $request -> truong_id;
        $user -> lop_id = $request -> lop_id;
        $user -> address = $request -> address;
        $user -> tel_parent = $request -> tel_parent;
        $user -> tel_mother = $request -> tel_mother;
        $user -> name_parent = $request -> name_parent;
        $user -> name_mother = $request -> name_mother;
        $user -> mode_agency = $request -> mode_agency;
        // $user -> method_pay_agency = $request -> method_pay_agency;
        $rand = substr(md5(microtime()),rand(0,26),5);
        $user -> api_token = bcrypt($rand);
        
        if($request -> birthday){
            $user-> birthday = Carbon::parse($request -> birthday);
        }

        if($type_id == 3 ){
        $account_type = 'person';
        }elseif($type_id == 4){
        $account_type = 'sale';
        }elseif($type_id == 5){
        $account_type = 'org';
        }else{
        $account_type = '';
        }

        $user -> account_type = $account_type;
        $user -> org_name = $request -> org_name;
         
        if($request -> hasFile('img')){
               $img_file = $request -> file('img');
               $exten_img = $img_file -> getClientOriginalExtension();
               if($exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
               return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
               }
               $img = $img_file -> getClientOriginalName();
    
               $i=1;
               while(file_exists('source/user/'.$img)){
                  if($i == 1){
                     $img = str_replace('.','-'.$i++.'.',$img);
                  }else{
                     $a =$i-1;
                     $img = str_replace($a.'.',$i++.'.',$img);
                  }
               }
               $img_file->move('source/user/',$img);
            
         }else{
               $img = '';
         }
         $user -> img = $img;
         $user -> save();

      return redirect('admin/user/'.$type_id.'/parent/'.$request->parent_id) -> with('alert','Thêm thành viên thành công');
   }

   //thay doi status
   public function get_change_status($type_id,$id){
      $this->authorize('admin_user_edit');
      $user = User::find($id);
      // khong duoc quyen thay doi trong thai root
      if($id != '1'){
         if($user -> status == 'off'){
            $user -> status = 'on';
            $user -> save();
            return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
         }
         elseif ($user -> status == 'on'){
            $user -> status = 'off';
            $user -> save();
            return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
         }
      }else{
         return redirect()-> back() -> with('alert_error','Bạn không được quyền thay đổi trạng thái của root này');
      }
   }//ket thuc doi status
   public function post_user_edit (Request $request,$type_id,$user_parent_id,$id){
      $this->authorize('admin_user_edit');
      //sua thong tin co ban
        $user = User::find($id);
         // check sua email
            $this -> validate($request,
            [
               'email' => 'required|unique:users,email,'.$id,
               'tel' => 'required|unique:users,tel,'.$id,
               'name' => 'required|min:2|max:38',
            ],
            [
               'email.required' => 'Bạn chưa nhập email thành viên',
               'email.unique' => 'Email thành viên đã tồn tại',

               'tel.required' => 'Bạn chưa nhập số điện thoại thành viên',
               'tel.unique' => 'Số điện thoại thành viên đã tồn tại',
               'tel.number' => 'Bạn phải nhập đúng định dạng số điện thoại',

               'email.email' => 'Bạn phải nhập đúng định dạng email ví dụ: info@webux.vn',
               'name.required' => 'Bạn chưa nhập họ tên',
               'name.min' => 'Họ tên quá ngắn, họ tên từ 2 - 38 ký tự',
               'name.max' => 'Họ tên quá dài, họ tên từ 2 - 38 ký tự',
            ]);

            if($request->coupon != ''){
                $this -> validate($request,
                    ['coupon' => 'unique:users,coupon,'.$id],
                    ['coupon.unique' => 'Mã giảm giá đã tồn tại']);
            }

         // checkbox neu sua mat khau
        if($request -> changepass == 'on'){
            if($request -> password != ''){
               $user -> password = bcrypt($request -> password);
            }
        }
        $user -> email = $request -> email;
        $user -> remember_token = $request -> _token;
        $user -> name = $request -> name;
        $user -> tel = $request -> tel;
        $user -> status = $request -> status;
        $user -> huyen_id = $request -> huyen_id;
        $user -> tinh_id = $request -> tinh_id;
        $user -> position_id = $request -> position_id;
        $user -> level_id = $request -> level_id;
        $user -> coupon = $request -> coupon;
        $user -> note = $request -> note;
        $user -> account_type = $request -> account_type;
        $user -> parent_id = $request -> parent_id;
        $user -> org_name = $request -> org_name;
        $user -> truong_id = $request -> truong_id;
        $user -> lop_id = $request -> lop_id;
        $user -> address = $request -> address;
        $user -> tel_parent = $request -> tel_parent;
        $user -> tel_mother = $request -> tel_mother;
        $user -> name_parent = $request -> name_parent;
        $user -> name_mother = $request -> name_mother;
        $user -> mode_agency = $request -> mode_agency;
        // $user -> method_pay_agency = $request -> method_pay_agency;
        
        if($request -> birthday){
            $user-> birthday = Carbon::parse($request -> birthday);
        }

         //sua anh
         if($request -> del_img == 'del_img'){
            if($user-> img){
               while(file_exists('source/user/'.$user->img)){
                  unlink('source/user/'.$user->img);
               }
            }
            $img = '';
        }

        if($request -> hasFile('img')){
            if($user-> img){
                while(file_exists('source/user/'.$user->img)){
                   unlink('source/user/'.$user->img);
                }
            }

            $img_file = $request -> file('img');
            $exten_img = $img_file -> getClientOriginalExtension();
            if($exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $img = $img_file -> getClientOriginalName();
            
            $i=1;
            while(file_exists('source/user/'.$img)){
                if($i == 1){
                    $img = str_replace('.','-'.$i++.'.',$img);
                }else{
                    $a =$i-1;
                    $img = str_replace($a.'.',$i++.'.',$img);
                }
            }
            $img_file->move('source/user',$img);
        }else{
            $img = '';
        }
         
        $user -> img = $img;
        $user -> save();
      return redirect('admin/user/'.$type_id.'/parent/'.$request->parent_id) -> with('alert','Sửa thành viên thành công');
   }

   public function get_user_del($type_id,$id){
      $this->authorize('admin_user_edit');
      $user = User::find($id);
    

      if($user -> img){
            while(file_exists("source/user/".$user -> img)){
               unlink("source/user/".$user -> img);
            }
         }
      $user -> delete();

        return redirect()->back() -> with('alert','Bạn xóa thành viên thành công');
 	   
   }

}
