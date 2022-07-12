<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_config;
use App\Http\Model\User;
use Auth;
use DB;

class UserAgency extends Controller {
    public function index(Request $request){
        $user = User::find(Auth::user()->id);
   
		return view('Agency::userAgency',['user'=>$user,'title'=>'Thông tin cá nhân']);
   }
    public function change_pass(Request $request){
        $this -> validate($request,
        [
            'password' => 'required|min:6|max:38',
            'password_again' => 'required|same:password',
        ],
        [
            'password_again.required' => 'Ban chưa nhập lại mật khẩu',
            'password_again.same' => 'Mật khẩu nhập lại chưa khớp',
        ]);

        $user = User::find(Auth::user()->id);
        $user -> password = bcrypt($request -> password);
        $user -> save();
   
		return redirect()->back()->with('alert','Bạn đã thay đổi mật khẩu thành công');
   }

}
