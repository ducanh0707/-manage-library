<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_post;
use App\Http\Model\M_post_type;
use App\Http\Model\M_config;
use Auth;
use DB;

class CourseAgency extends Controller {
    public function index(Request $request){
        $post_course = M_post_type::where('url','course')->first();
        $course_list = M_post::where('post_type_id',$post_course->id)->where('status','on')->get();
        $percen_coupon = M_config::where('name','percen_coupon')->first();
        $discount_1 = M_config::where('name','percen_discount_1')->first();
        $discount_2 = M_config::where('name','percen_discount_2')->first();
        $discount_3 = M_config::where('name','percen_discount_3')->first();
        $discount_4 = M_config::where('name','percen_discount_4')->first();

   
        return view('Agency::courseAgency',['discount_1'=>$discount_1,'discount_2'=>$discount_2,'discount_3'=>$discount_3,'discount_4'=>$discount_4,'percen_coupon'=>$percen_coupon,'title'=>'Danh sách liên hệ','course_list'=>$course_list]);
   }

}
