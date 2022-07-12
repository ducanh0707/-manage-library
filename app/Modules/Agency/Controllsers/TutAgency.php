<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_post;
use App\Http\Model\M_config;
use Auth;
use DB;

class TutAgency extends Controller {
    public function tut_video(Request $request){
        $post_tut_video = M_config::where('name','post_tut_video')->first();
        $post = M_post::where('id',$post_tut_video->value)->first();

        return view('Agency::tutAgency',['post'=>$post,'title'=>$post->title]);
    }
    public function tut_sales(Request $request){
        
        $post_tut_slase = M_config::where('name','post_tut_slase')->first();
        $post = M_post::where('id',$post_tut_slase->value)->first();

    
        return view('Agency::tutAgency',['post'=>$post , 'title'=>$post->title]);
    }
    public function tut_file(Request $request){
        $post_tut_file = M_config::where('name','post_tut_file')->first();
        $post = M_post::where('id',$post_tut_file->value)->first();

    
        return view('Agency::tutAgency',['post'=>$post,'title'=>$post->title]);
    }

}
