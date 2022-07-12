<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Model\M_theme;
use App\Http\Model\M_theme_row;
use App\Http\Model\M_sidebar;

use App\Http\Model\M_book;
use App\Http\Model\M_cat;
use App\Http\Model\M_company;
use App\Http\Model\M_users;
use App\Http\Model\M_orders;
use App\Http\Model\User;
use Auth;

class profileController extends BaseController
{

   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   function __construct(){
        $theme_home = M_theme::where('type','home')->first();
        view()->share('theme_home',$theme_home);
        $row_head = M_theme_row::orderby('orderby','asc')->where('posion','head')->where('theme_id',$theme_home->id)->where('status','on')->get();
        $row_body = M_theme_row::orderby('orderby','asc')->where('posion','body')->where('theme_id',$theme_home->id)->where('status','on')->get();
        $row_footer = M_theme_row::orderby('orderby','asc')->where('posion','footer')->where('theme_id',$theme_home->id)->where('status','on')->get();
        $sidebar = M_sidebar::orderby('orderby','asc')->where('status','on')->get();
        view()->share('row_head',$row_head);
        view()->share('row_footer',$row_footer);
        view()->share('sidebar',$sidebar);
        view()->share('row_body',$row_body);

        //menu giao dien
        $_theme_list = M_theme::get();
        view()->share('_theme_list',$_theme_list);
     

        $row_menu = M_theme_row::find(91);
        view()->share('row_menu',$row_menu);
        $favicon = $theme_home ->favicon;
        view()->share('favicon',$favicon);
        $code_head = $theme_home -> head;
        view()->share('code_head',$code_head);
    }

 



    public function get_profile()
    {  
        $id = Auth::user()->id; 
        $user = User::find($id);
        $cat= M_cat::where('status','on')->first();
        $comp= M_company::where('status','on')->first();
 

        if($user == ''){ return response() ->view('errors.404');  }

    
        
        if($user->title_seo == ''){
            $title = $user->title;
        }else{
         $title = $user->title_seo;
        }
        if($user->des_seo == ''){
             $des = $user->title;
        }else{
             $des = $user->des_seo;
        }
        //key
        $key = $user->key_seo;
        
        return view('V_fontend/profile',[ 'page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'user' =>$user,'cat' =>$cat,'comp' =>$comp]);
    }
    public function get_user_thue()
    {  
        $id = Auth::user()->id; 
        $user = User::find($id);
        $cat= M_cat::where('status','on')->first();
        $comp= M_company::where('status','on')->first();
        
        $received = M_orders::where('user_id',Auth::user()->id)->where('status','received')->where('type','thue')->paginate(20);
        $returned = M_orders::where('user_id',Auth::user()->id)->where('status','returned')->where('type','thue')->paginate(20);
        $waiting = M_orders::where('user_id',Auth::user()->id)->where('status','waiting')->where('type','thue')->paginate(20);
        //sach thue trong thang
        $received_count_month = M_orders::where('user_id',Auth::user()->id)->where('status','received')->whereMonth('created_at', date('m'))->where('type','thue')->count();

        if($user == ''){ return response() ->view('errors.404');  }

    
        
        if($user->title_seo == ''){
            $title = $user->title;
        }else{
         $title = $user->title_seo;
        }
        if($user->des_seo == ''){
             $des = $user->title;
        }else{
             $des = $user->des_seo;
        }
        //key
        $key = $user->key_seo;
        
        return view('V_fontend/profile_thue',['received_count_month'=>$received_count_month,'received'=>$received,'returned'=>$returned,'waiting'=>$waiting,'page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'user' =>$user,'cat' =>$cat,'comp' =>$comp]);
    }

    public function get_user_mua()
    {  
        $id = Auth::user()->id; 
        $user = User::find($id);
        $cat= M_cat::where('status','on')->first();
        $comp= M_company::where('status','on')->first();
        
        $done = M_orders::where('user_id',Auth::user()->id)->where('status','done')->where('type','mua')->paginate(20);
        $buy_waiting = M_orders::where('user_id',Auth::user()->id)->where('status','buy-waiting')->where('type','mua')->paginate(20);


        if($user == ''){ return response() ->view('errors.404');  }

    
        
        if($user->title_seo == ''){
            $title = $user->title;
        }else{
         $title = $user->title_seo;
        }
        if($user->des_seo == ''){
             $des = $user->title;
        }else{
             $des = $user->des_seo;
        }
        //key
        $key = $user->key_seo;
        
        return view('V_fontend/profile_mua',['buy_waiting'=>$buy_waiting,'done'=>$done,'page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'user' =>$user,'cat' =>$cat,'comp' =>$comp]);
    }
    public function get_hh()
    {  
        $id = Auth::user()->id; 
        $user = User::find($id);
        $cat= M_cat::where('status','on')->first();
        $comp= M_company::where('status','on')->first();
        
        $hoahong = M_orders::where('status','done')->where('coupon',Auth::user()->coupon)->paginate(20);
        
        if($user->title_seo == ''){
            $title = $user->title;
        }else{
         $title = $user->title_seo;
        }
        if($user->des_seo == ''){
             $des = $user->title;
        }else{
             $des = $user->des_seo;
        }
        //key
        $key = $user->key_seo;
        
        return view('V_fontend/hoahong',['hoahong'=>$hoahong,'page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'user' =>$user,'cat' =>$cat,'comp' =>$comp]);
    }
    public function post_user (Request $request){
        $id = Auth::user()->id;
        //sua thong tin co ban
        $user = User::find($id);
           // check sua email
              $this -> validate($request,
              [
               //   'email' => 'required|unique:users,email,'.$id,
                 'tel' => 'required|unique:users,tel,'.$id,
           
              ],
              [
                 
                 'tel.required' => 'Bạn chưa nhập số điện thoại thành viên',
                 'tel.unique' => 'Số điện thoại thành viên đã tồn tại',
                 'tel.number' => 'Bạn phải nhập đúng định dạng số điện thoại',
              ]);
           // checkbox neu sua mat khau
          if($request -> changepass == 'on'){
              if($request -> password != ''){
                 $user -> password = bcrypt($request -> password);
              }
          }
            // $user -> email = $request -> email;
            $user -> tel = $request -> tel;
           //sua anh
           if($request -> del_img == 'del_img'){
              if($user-> img){
                 while(file_exists('upload/user/'.$user->img)){
                    unlink('upload/user/'.$user->img);
                 }
              }
              $img = '';
           }else{
                 if($request -> hasFile('img')){
                    $img_file = $request -> file('img');
                    $exten_img = $img_file -> getClientOriginalExtension();
                    if($exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
                    return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
                    }
                    $img = $img_file -> getClientOriginalName();
                    
                    $i=1;
                    while(file_exists('upload/user/'.$img)){
                       if($i == 1){
                             $img = str_replace('.','-'.$i++.'.',$img);
                       }else{
                             $a =$i-1;
                             $img = str_replace($a.'.',$i++.'.',$img);
                       }
                    }
                    $img_file->move('upload/user',$img);
                 }
           }    
            $user -> save();
     
        return redirect() -> back() -> with('alert','Sửa thông tin thành công');
    }
    
     
}
