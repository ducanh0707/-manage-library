<?php namespace App\Modules\AdminUser\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
use App\Http\Model\M_user_type;
use App\Http\Model\M_tinh;
use App\Http\Model\M_huyen;
use App\Http\Model\M_user_tinh;
use Auth;
use DB;

class UserTinhController extends Controller {
   

     //danh sach quyen
     public function get_user_tinh($user_type_id,$user_id){
        $this->authorize('admin_user_edit');

        $tinh_list = M_tinh::get();
        $user = User::find($user_id);
        $title = 'Phân quyền quản lý'; 

        return view('AdminUser::user_tinh',['user_id'=>$user_id,'tinh_list'=>$tinh_list,'user'=>$user,'user_type_id'=>$user_type_id,'title'=>$title]);
    }
    
    //them quyen 
    public function get_user_add_tinh($user_type_id,$user_id,$tinh_id){
        $this->authorize('admin_user_edit');
        //check 
        $user_tinh = M_user_tinh::where('user_id',$user_id)->where('tinh_id',$tinh_id)->first();

        if($user_tinh){
            $user_tinh -> delete(); 
        }else{
            $type = new M_user_tinh;
            $type -> user_id = $user_id;
            $type -> tinh_id = $tinh_id;
            $type -> status = 'on';
            $type -> type = 'sale';
            $type -> save();
            
        }
    }

}
