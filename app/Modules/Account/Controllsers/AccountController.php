<?php namespace App\Modules\Account\Controllsers;

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
use App\Http\Model\M_users;
use Auth;
use DB;
use Carbon\Carbon;

class AccountController extends Controller {
 

    public function get_user_list(Request $request){
        $this->authorize('account_view');
  
       
        $user = User::orderBy('created_at','desc')->where('user_type_id',35);
        if($request->search){
            $user = User::orderBy('created_at','desc')->where('user_type_id',35);
            $feil = $request->search_feild;
            $user = $user->where($feil,'like',"%$request->search%");
        } 
        $tinh_id = Auth::user()->tinh_id;
        $huyen_id = Auth::user()->huyen_id;
        $truong_id = Auth::user()->truong_id;
        $sum=$user->sum('money');

        if(Auth::user()->user_type_id == 1){
        $user = User::where('status','on');
            $sum = User::where('status','on')->sum('money');
        }
        //neu so vao 
        if(Auth::user()->user_type_id == 2){
            
            $user = $user->where('tinh_id',$tinh_id);
            $sum = $user->where('tinh_id',$tinh_id)->sum('money');

        }
         //  neu phong dang nhap
        if(Auth::user()->user_type_id == 4){
            $user = $user->where('tinh_id',$tinh_id)->where('huyen_id',$huyen_id);
            $sum = $user->where('tinh_id',$tinh_id)->where('huyen_id',$huyen_id)->sum('money');

        }
        // neu truong dang nhap
       
        if(Auth::user()->user_type_id == 5){
            $user = $user->where('truong_id',$truong_id);
            $sum = M_users::where('truong_id',$truong_id)->sum('money');
        }
        $user = $user ->paginate(25);
        $title = 'Thành viên';
     
      return view('Account::user_list',['title'=>$title,'user'=>$user,'sum'=>$sum]);
    }

    public function get_user_new (Request $request,$type_id,$user_parent_id){
        $this->authorize('account_view');
        $type = M_user_type::find($type_id);
        $user_type = M_user_type::all();

        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        $level_list = M_level::get();

        $position_list = M_position::get();
        $title = 'Thêm mới đại lý tổ chức';

        return view('Account::user_agency_new',['user_parent_id'=>$user_parent_id,'position_list'=>$position_list,'level_list'=>$level_list,'tinh_list'=>$tinh_list,'type_id'=>$type_id,'title'=>$title,'type'=>$type,'user_type'=>$user_type]);
    }
    // sửa
    public function get_user_edit (Request $request,$id){
        $this->authorize('account_view');
        // $user_type = M_user_type::all();
       
        $tinh_list = M_tinh::orderby('orderby','asc')->get();
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

        return view('Account::user_list',['lop_list'=>$lop_list,'truong_list'=>$truong_list,'huyen_list'=>$huyen_list,'position_list'=>$position_list,'tinh_list'=>$tinh_list,'user'=>$user]);
    }
    // them moi
    public function post_user_new (Request $request){
        $this->authorize('account_edit');
        $id_customer = M_user_type::where('type','customer')->first();
         $tinh_id = Auth::user()->tinh_id;
         $huyen_id = Auth::user()->huyen_id;
         $truong_id = Auth::user()->truong_id;
         $this -> validate($request,
            [
                'tel' => 'required|unique:users,tel',
                'password' => 'required|min:6|max:38',
                'name' => 'required|min:2|max:38',
                'password_again' => 'required|same:password',
                'img' => 'mimes:jpeg,bmp,png|max:2000',
            ],
            [
           
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
            ]);
        
        $user = new User;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> remember_token = $request -> _token;
        $user -> name = $request -> name;
        $user -> tel = $request -> tel;
        $user -> tinh_id =  Auth::user()->tinh_id;
        $user -> huyen_id =  Auth::user()->huyen_id;
        $user -> truong_id = Auth::user()->truong_id;
        $user -> user_type_id = $id_customer->id;
        $user -> status = 'on';
        $user -> money = $request -> money;
        $user -> status = $request -> status;
        $rand = substr(md5(microtime()),rand(0,26),5);
        $user -> api_token = bcrypt($rand);
        $user -> save();

      return redirect('admin/account/') -> with('alert','Thêm thành viên thành công');
   }
   //thay doi status
   public function get_change_status($id){
      $this->authorize('account_edit');
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
   }
   //ket thuc doi status
   public function post_user_edit(Request $request,$id){
      $this->authorize('account_edit');
      //sua thong tin co ban
        $user =M_users::find($id);
         // check sua email
            $this -> validate($request,
            [
               'tel' => 'required|unique:users,tel,'.$id,
               'name' => 'required|min:2|max:38',
            ],
            [

               'tel.required' => 'Bạn chưa nhập số điện thoại thành viên',
               'tel.unique' => 'Số điện thoại thành viên đã tồn tại',
               'tel.number' => 'Bạn phải nhập đúng định dạng số điện thoại',

               'name.required' => 'Bạn chưa nhập họ tên',
               'name.min' => 'Họ tên quá ngắn, họ tên từ 2 - 38 ký tự',
               'name.max' => 'Họ tên quá dài, họ tên từ 2 - 38 ký tự',
            ]);
         // checkbox neu sua mat khau
        if($request -> changepass == 'on'){
            if($request -> password != ''){
               $user -> password = bcrypt($request -> password);
            }
        }
        $user -> remember_token = $request -> _token;
        $user -> name = $request -> name;
        $user -> tel = $request -> tel;
        $user -> status = $request -> status;
        $user -> account_type = $request -> account_type;

        $money = $request -> money;
        
        $money_add = $request-> money_add;
        if($money_add > 0){
            $money_old = $user->money;
            $money = $money_old + $money_add;
        } 
        $user -> money = $money;
       
        $user -> save();
       
      return redirect('admin/account')-> with('alert','Sửa thành viên thành công');
   }
// xoaa
   public function get_user_del($id){
      $this->authorize('account_edit');
      $user = User::find($id);
    

    if($user -> img){
            while(file_exists("source/user/".$user -> img)){
               unlink("source/user/".$user -> img);
            }
        }
        $user -> delete();
        return redirect()->back() -> with('alert','Bạn xóa thành viên thành công');
 	   
    }
    //    export
    public function get_export(Request $request){
        $this->authorize('account_view');
        $user = User::orderBy('created_at','desc')->where('user_type_id',35);
        // if($request->search){
        //     $user = User::orderBy('created_at','desc')->where('user_type_id',35);
        //     $feil = $request->search_feild;
        //     $user = $user->where($feil,'like',"%$request->search%");
        // } 
        $tinh_id = Auth::user()->tinh_id;
        $huyen_id = Auth::user()->huyen_id;
        $truong_id = Auth::user()->truong_id;
        $sum=$user->sum('money');
        if(Auth::user()->user_type_id == 1){
            $user = User::where('status','on');
            $sum = User::where('status','on')->sum('money');
        }
        //neu so vao 
        if(Auth::user()->user_type_id == 2){
            $user = $user->where('tinh_id',$tinh_id);
            $sum = $user->where('tinh_id',$tinh_id)->sum('money');
        }
        //  neu phong dang nhap
        if(Auth::user()->user_type_id == 4){
            $user = $user->where('tinh_id',$tinh_id)->where('huyen_id',$huyen_id);
            // $sum = $user->where('tinh_id',$tinh_id)->where('huyen_id',$huyen_id)->sum('money');
        }
        // neu truong dang nhap
        if(Auth::user()->user_type_id == 5){
            $user = $user->where('truong_id',$truong_id);
            $sum = M_users::where('truong_id',$truong_id)->sum('money');

        }
        $user = $user ->get();
        foreach($user  as $key => $row){
            if($row->status == 'on'){
                $status = 'Kích hoạt';
            }
            else{
                $status = 'Chưa kích hoạt';
            }
            if(isset($row->f_tinh)){
                $name_tinh= $row->f_tinh->name;
            }else{
                $name_tinh='';
            }
            if(isset($row->f_huyen)){
                $name_huyen = $row->f_huyen->name;
            }else{
                $name_huyen='';
            }
            if(isset($row->f_truong)){
                $name_truong= $row->f_truong->name; 
            }else{
                $name_truong='';
            }
            
            if($row->user_type_id==1){
                    $kieu= 'Admin';
            }elseif($row->user_type_id==2){
                $kieu= 'Sở giáo dục';
            }elseif($row->user_type_id==4){
                $kieu= 'Phòng giáo dục';
            }elseif($row->user_type_id==5){
                $kieu= 'Trường học';
            }elseif($row->user_type_id==6){
                $kieu= 'Giáo viên';
            }
            elseif($row->user_type_id==35){
                $kieu= 'Khách hàng';
            }
            $data[] = array(
                "Họ tên"=>  html_entity_decode($row->name), 
                "Điện thoại"=> html_entity_decode($row->tel),
                "Tên đăng nhập-gmail"=>html_entity_decode($row->email),
                "Mật khẩu"=>html_entity_decode($row->password),
                "Kiểu tài khoản"=>html_entity_decode($kieu),
                "Tỉnh"=>html_entity_decode($name_tinh),
                "Huyện"=>html_entity_decode($name_huyen),
                "Trường"=>html_entity_decode($name_truong),
                "Trạng thái"=>html_entity_decode($status),
            );
                // return $data;
            }
            return view('Account::export',['user'=>$user,'data'=>$data]);
        }
    public function get_account_import(Request $request){
            $this->authorize('account_view');
            if($request -> file){
               if($request -> hasFile('file')){
                  $file_file = $request -> file('file');
                  $exten_file = $file_file -> getClientOriginalExtension();
                  if($exten_file != 'xls' and $exten_file != 'xlsx') {
                  return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file xls');
                  }
                  $file = $file_file -> getClientOriginalName();
                  $i=1;
                  while(file_exists('source/account/'.$file)){
                     if($i == 1){
                        $file = str_replace('.','-'.$i++.'.',$file);
                     }else{
                        $a =$i-1;
                        $file = str_replace($a.'.',$i++.'.',$file);
                     }
                  }
                  $file_file->move('source/account/',$file);
               }else{
                  $file = '';
               }
            }else{
               $file='';
            }
      
            return view('Account::user_import',['title' => 'Nhập excel']);
       }
       public function post_account_import(Request $request){ 
        $this->authorize('account_view');
      
         if($request -> hasFile('file')){
            $file_file = $request -> file('file');
            $exten_file = $file_file -> getClientOriginalExtension();
            if($exten_file != 'xlsx' and $exten_file != 'xls') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file xls)');
            }
            $file = $file_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/account/'.$file)){
               if($i == 1){
                  $file = str_replace('.','-'.$i++.'.',$file);
               }else{
                  $a =$i-1;
                  $file = str_replace($a.'.',$i++.'.',$file);
               }
            }
            $file_file->move('source/account/',$file);
         }else{
            $file = '';
        }
       
         // neu data akhacs rong 
         if($request-> data != ''){
                foreach(json_decode($request->data) as $val){

                
                $type = M_user_type::where('name','like','%'.$val[4].'%')->first();
                if($type ){
                    $user_type_id = $type ->id;
                }else{
                    $user_type_id = 35;
                }
             
                $tinh = M_tinh::where('name','like','%'.$val[5].'%')->first();
                if($tinh ){
                    $tinh_id = $tinh ->id;
                }else{
                    $tinh_id = '';
                }
                
                $huyen = M_huyen::where('name','like','%'.$val[6].'%')->first();
                if($huyen ){
                    $huyen_id = $huyen ->id;
                }else{
                    $huyen_id = '';
                }
                $truong = M_truong::where('name','like','%'.$val[7].'%')->first();
                if($truong ){
                    $truong_id = $truong ->id;
                }else{
                    $truong_id = '';
                }
                $account = new M_users();
                $account ->name = $val[0];
                $account ->tel =$val[1];
                $account ->email = $val[2];
                $account ->password = bcrypt($val[3]);
                $account ->user_type_id  = $user_type_id;  
                $account ->tinh_id  =$tinh_id;
                $account ->huyen_id =$huyen_id;
                $account ->truong_id  = $truong_id;
                $account ->status = 'on';
                $account -> save();
            }
         
        }
         return redirect('admin/account/import?file='.$file)->with('alert','Bạn đã nhập file thành công');
    }
}