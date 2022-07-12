<?php namespace App\Modules\Agency\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_post;
use App\Http\Model\M_config;
use Auth;
use DB;

class PolicyAgency extends Controller {
    public function index(Request $request){
      $post_config = M_config::where('name','post_policy')->first();
      $post = M_post::where('id',$post_config->value)->first();

  
   return view('Agency::policyAgency',['post'=>$post,'title'=>$post->title]);


   }

}
