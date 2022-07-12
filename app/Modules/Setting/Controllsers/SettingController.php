<?php
namespace App\Modules\Setting\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_config;
use App\Http\Model\M_post;
use App\Http\Model\M_post_type;
use App\Http\Model\M_cat;
use Auth;

class SettingController extends Controller{

    public function index(Request $request){
        $cat_list = M_cat::get();
        $cat_tut_config = M_config::where('name','cat_tut')->first();
        $cat_noti_config = M_config::where('name','cat_noti')->first();
        $cat_id = $cat_tut_config-> value;
        $post_tut_list =  M_post::whereHas('f_cat', function($q_cat) use ($cat_id){$q_cat->where('cat_id', $cat_id);})->where('post.status','on')->orderby('orderby','desc')->get();

        $post_tut_setting = M_config::where('type','setting_post')->get();

        $post_faq = M_config::where('name','post_faq')->first();
        $post_tut_video = M_config::where('name','post_tut_video')->first();
        $post_tut_slase = M_config::where('name','post_tut_slase')->first();
        $post_tut_file = M_config::where('name','post_tut_file')->first();
        $post_policy = M_config::where('name','post_policy')->first();

        return view('Setting::index',['post_faq'=>$post_faq,'cat_noti_config'=>$cat_noti_config,'cat_tut_config'=>$cat_tut_config,'post_tut_list'=>$post_tut_list ,'cat_list'=>$cat_list,'post_tut_setting'=>$post_tut_setting,'title'=>'Cài đặt']);
    }
    public function post_setting(Request $request){ 
        $cat_tut = M_config::where('name','cat_tut')->update(['value'=>$request->cat_tut]);
        $cat_tut = M_config::where('name','cat_noti')->update(['value'=>$request->cat_noti]);
        
        M_config::where('name','post_faq')->update(['value'=>$request -> setting_post['post_faq']]);
        M_config::where('name','post_tut_video')->update(['value'=>$request -> setting_post['post_tut_video']]);
        M_config::where('name','post_tut_slase')->update(['value'=>$request -> setting_post['post_tut_slase']]);
        M_config::where('name','post_tut_file')->update(['value'=>$request -> setting_post['post_tut_file']]);
        M_config::where('name','post_policy')->update(['value'=>$request -> setting_post['post_policy']]);
       

        return redirect()->back()->with('alert','Bạn đã sửa thành công');
    }
}