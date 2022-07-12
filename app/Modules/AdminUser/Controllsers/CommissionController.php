<?php namespace App\Modules\AdminUser\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
use App\Http\Model\M_Commission;
use Auth;
use DB;

class CommissionController extends Controller {
    public function get_commission($user_id){
        $this->authorize('admin_permission_view');
        $comm =  M_Commission::where('user_id',$user_id)->get();
        $user = User::find($user_id);

       return view('AdminUser::commission',['title'=>'Hoa hồng','comm'=>$comm,'user_id'=>$user_id,'user'=>$user]);
    }
     // them moi
     public function post_commission_new(Request $request,$user_id){
        $this->authorize('admin_permission_edit');
 
        $Comm = new M_Commission();
        $Comm -> user_id =  $user_id;
        $Comm ->commission = $request->commission;
        $Comm -> han_muc_min = $request->han_muc_min;
        $Comm -> han_muc_max = $request->han_muc_max;

        $Comm -> save();
        return redirect()->back()->with('alert','Bạn thêm thành công');
    }

    public function post_commissionn_edit(Request $request,$user_id,$id){
        $this->authorize('admin_permission_edit');
        $Comm= M_Commission::find($id);

        $Comm ->commission = $request->commission;
        $Comm -> han_muc_max = $request->han_muc_max;
        $Comm -> han_muc_min = $request->han_muc_min;

        $Comm -> save();
        return redirect()->back()->with('alert','Bạn sửa thành công');
    }
    // xoa
    public function get_commissionn_del(Request $request,$user_id,$id){
        $this->authorize('admin_permission_edit');
        $Comm= M_Commission::where('id',$id)->delete();

        return redirect()->back()->with('alert','Bạn sửa thành công');
    }
   

}
