<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_post;
use App\Http\Model\M_config;
use Auth;
use DB;

class NotiAgency extends Controller {
    public function index(Request $request){
        $cat_noti_config = M_config::where('name','cat_noti')->first();
        $cat_id = $cat_noti_config-> value;
        $post_list =  M_post::whereHas('f_cat', function($q_cat) use ($cat_id){$q_cat->where('cat_id', $cat_id);})->where('post.status','on')->orderby('orderby','desc')->paginate(20);
   
		return view('Agency::notiAgency',['post_list'=>$post_list,'title'=>'Thông báo']);
   }
    public function get_view_noti(Request $request,$id){
        M_post::where('id',$id)->update(['view'=>'1']);
        $post = M_post::where('id',$id)->first();

    
        return view('Agency::notiviewAgency',['post'=>$post,'title'=>$post->title]);
   }

}
