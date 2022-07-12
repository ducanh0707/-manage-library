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
use App\Http\Model\M_cat;
use App\Http\Model\M_post;
use App\Http\Model\M_post_cat;
use App\Http\Model\M_user_type;
use App\Http\Model\M_post_type;
use App\Http\Model\M_slide_img;

use App\Http\Model\M_category;
use App\Http\Model\M_company;
use App\Http\Model\M_book;
use App\Http\Model\M_comment;
use App\Http\Model\M_content_comment;
use App\Http\Model\M_orders;
use App\Http\Model\M_tinh;

use App\Http\Model\M_menu;
use App\Http\Model\M_menu_type;
use App\Http\Model\M_config;
use App\Http\Model\M_huyen;
use App\Http\Model\M_lop;
use App\Http\Model\M_level;
use App\Http\Model\M_position;
use App\Http\Model\M_truong;
use App\Http\Model\M_store;

use Auth;
use App\User;

use Session;
use Mail;


class Controller extends BaseController
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
         
         // menu adming
         $_post_type = M_post_type::get();
         view()->share('_post_type',$_post_type);

         //menu giao dien
         $_theme_list = M_theme::get();
         view()->share('_theme_list',$_theme_list);
         $chinh_sach = M_theme_row::where('style','chinh_sach')->first();
         view()->share('chinh_sach',$chinh_sach);
         $new_product = M_post::where('post_type_id','3')->limit(3)->get();
         view()->share('new_product',$new_product);

         $row_menu = M_theme_row::find(91);
         view()->share('row_menu',$row_menu);
         $favicon = $theme_home ->favicon;
         view()->share('favicon',$favicon);
         $code_head = $theme_home -> head;
         view()->share('code_head',$code_head);

         $_user_type_agency = M_user_type::where('url','agency')->first();
         view()->share('_user_type_agency',$_user_type_agency);

         $_menu_httv = M_menu_type::find(4);
         view()->share('_menu_httv',$_menu_httv );
         
         $_menu_dms = M_menu_type::find(3);
         view()->share('_menu_dms',$_menu_dms );

         $_menu_pgd = M_menu_type::find(5);
         view()->share('_menu_pgd',$_menu_pgd );
         $_menu_truong = M_menu_type::find(6);
         view()->share('_menu_truong',$_menu_truong );

      }
      

    public function get_home(){
         // if(!Auth::user()){
         //    return redirect('auth/login');
         // }
        $theme = M_theme::where('type','home')->first();
        $book_list = M_book::where('status','on')->get();
        $cat = M_cat::where('status','on')->first();
        $cmt = M_comment::where('status','on')->get();

   
        $title = $theme -> title_seo;
        $des = $theme -> des_seo;
        $key = $theme -> key_seo;
        $index_meta = $theme -> index_meta;
        return view('V_fontend/home',['book_list'=>$book_list,'cat'=>$cat,'page_type'=>'home','theme'=>$theme,'cmt'=>$cmt,'index_meta'=>$index_meta,'title'=>$title,'key'=>$key,'des'=>$des]);
    }
   
    
    
    public function get_search(Request $request){
        $theme = M_theme::where('type','home')->first();

        $key_ar = explode(' ',$request->key);
        $book_list = M_book::where('status','on');
        foreach($key_ar as $key_r){
            $book_list = M_book::orwhere('name','like', '%'.$key_r.'%');
        }
        $book_list = $book_list ->paginate(25);
        
        $title = $request->key;
        
        $key = '';
        $des = '';
        
        $index_meta = '';

    return view('V_fontend/search',['key_search'=>$request->key,'page_type'=>'search','theme'=>$theme,'index_meta'=>$index_meta,'des'=>$des,'key'=>$key,'title'=>$title,'book_list'=>$book_list]);
    }

    public function get_cat(Request $request, $url){
        $theme_cat = M_theme::where('type','cat')->first();
        $theme = M_theme::where('type','home')->first();
        $cat = M_cat::where('url',$url)->first();


        if($cat == ''){
         return response() ->view('errors.404');
        }
         
        $post_list = M_post::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat ->id);})->where('post.status','on')->orderby('orderby','desc')->paginate(18);
         
         if($cat->title_seo == ''){
            $title = $cat->name;
         }else{
            $title = $cat->title_seo;
         }
         
         $key = $cat->key;
         if($cat->des_seo == ''){
            $des = $cat->des;
         }else{
            $des = $cat->des_seo;
         }
         $index_meta = $cat -> index_meta;
        
         $file_theme = 'cat';
   
         return view('V_fontend/'.$file_theme,['page_type'=>'cat','theme'=>$theme,'theme_cat'=>$theme_cat,'url'=>$url,'index_meta'=>$index_meta,'des'=>$des,'key'=>$key,'title'=>$title,'post_list'=>$post_list,'cat'=>$cat]);
    }



    public function get_post($url){
         $post = M_post::where('url',$url)->first();
         if($post == ''){
            return response() ->view('errors.404');
         }
        
        $theme = M_theme::where('type','home')->first();
        $post_cat = M_post_cat::where('post_id',$post->id)->first();
        $cat = M_cat::find($post_cat->cat_id);
        $post->increment('view');
        $slide_list = M_slide_img::where('post_id',$post->id)->orderby('orderby','asc')->get();
      
       
         if($cat != ''){
             $post_relate = M_post::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat->id);})->where('post.status','on')->paginate(12);
         }else{
            $post_relate[] ='';
         }
         if($post->title_seo == ''){
            $title = $post->title;
         }else{
            $title = $post->title_seo;
         }
         if($post->des_seo == ''){
            $des = $post->title;
         }else{
            $des = $post->des_seo;
         }
         //key
         $key = $post->key_seo;
         if($post->theme_id){
            $theme_file = 'ladingpage/'.$post -> f_theme -> file_name;
            $theme_post = $post -> f_theme;
            $theme_post_row = M_theme_row::where('theme_id',$post->f_theme->id)->where('status','on')->get();
         }else{
            $theme_file = $post->f_post_type->url;
            $theme_post = '';
            $theme_post_row = '';
         }
        
         return view('V_fontend/'.$theme_file,['page_type'=>'post','slide_list'=>$slide_list,'theme_post_row'=>$theme_post_row,'theme'=>$theme,'post_relate'=>$post_relate,'theme_post'=>$theme_post,'url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'post' =>$post]);
         
    }
    public function post_add_cart(Request $request){
        $book_id = $request -> book_id;
        $book = M_book::where('id',$book_id)->get();

        if(Session::get('book_cart')){
           $session =  Session::get('book_cart') -> merge($book);
           Session::put('book_cart',$session);
        }else{
           Session::put('book_cart',$book);
        }
        if($request -> muangay == 'muangay'){
           return redirect('_gio_hang_.html5');
        }
    }

    public function post_add_cart_multi(Request $request){
        $book_id = $request -> book_id;
        $book = M_pbook::wherein('id',$book_id)->get();

        if(Session::get('book_cart')){
           $session =  Session::get('book_cart') -> merge($book);
           Session::put('book_cart',$session);
        }else{
           Session::put('book_cart',$book);
        }
     }

    public function post_del_cart(Request $request){
        foreach(Session::get('book_cart') as $product){
           if($product ->id != $request -> book_id){
              $id_array[] = $product->id;
           }
        }
        if(isset($id_array)){
           $session = M_post::wherein('id',$id_array)->get();
           Session::put('book_cart',$session);
           return Session::get('book_cart');
        }else{
           Session::forget('book_cart');
        }
     }

    public function get_cart(Request $request){
        $book_list  =  Session::get('book_cart');
        $theme = M_theme::where('type','home')->first();

        $title = 'Giỏ hàng';
        $des = '';
        $key = '';
        $index_meta = '';
        $tinh_list = M_tinh::all();

        return view('V_fontend/gio_hang',['tinh_list'=>$tinh_list,'book_list'=>$book_list,'theme'=>$theme,'title'=>$title,'key'=>$key,'des'=>$des,'index_meta'=>$index_meta]);
    }
   
    
    public function dangky(Request $request)
    {  
    $book=M_book::where('status','on')->first();
    $cat=M_cat::where('status','on')->first();
    $comp=M_company::where('status','on')->first();
    if($book == ''){ return response() ->view('errors.404');  }
    if($book->title_seo == ''){
    $title = $book->title;
    }else{
    $title = $book->title_seo;
    }
    if($book->des_seo == ''){
    $des = $book->title;
    }else{
    $des = $book->des_seo;
    }
    $key = $book->key_seo;
    return view('V_fontend/regis',['page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'book' =>$book,'cat' =>$cat,'comp' =>$comp]);
    }
    function purchase(Request $request)
    {
        $id= Auth::user()->id;
        $book=M_book::where('status','on')->first();
         
         
        $order=M_orders::orderby('id','asc')->where('user_id',$id)->get();
        if($order == ''){ return response() ->view('errors.404');  }

        $cat=M_cat::where('status','on')->first();
        $comp=M_Company::where('status','on')->first();
        if($order == ''){ return response() ->view('errors.404');  }
        if($book->title_seo == ''){
            $title = $book->title;
        }else{
            $title = $book->title_seo;
        }
        if($book->des_seo == ''){
            $des = $book->title;
        }else{
            $des = $book->des_seo;
        }
            $key = $book->key_seo;
        return view('V_fontend/purchase',['page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'book' =>$book,'order' =>$order,'cat' =>$cat,'comp' =>$comp]);
  
    }

   
     public function get_truong_user($huyen_id){
         $truong_list = M_truong::where('huyen_id',$huyen_id)->get();
         echo '<option value="">Tất cả trường</option>';
         foreach($truong_list as $truong){
            echo '<option value="'.$truong->id.'">'.$truong->name.'</option>';
         }
        
     }
     public function get_lop_user($truong_id){
         $lop_list = M_lop::where('truong_id',$truong_id)->get();
         echo '<option value="">Tất cả lớp</option>';
         foreach($lop_list as $lop){
            echo '<option value="'.$lop->id.'">'.$lop->name.'</option>';
         }
        
     }
     public function get_level_positon($level_id){
         $level_list = M_level::where('parent_id',$level_id)->where('position','on')->get();
         foreach($level_list as $level){
            echo '<option value="'.$level->id.'">'.$level->name.'</option>';
         }
     }
     // chuyen huong khi bam vao thong bao 
     public function get_noti_redirect($user_id,$noti_id){
         $user = User::find($user_id);
         $noti = $user->notifications->where('id',$noti_id)->first();
         $noti ->markAsRead();
         if($noti -> data['link']){
             return redirect($noti -> data['link']);
         }else{
             return redirect()->back();
         }
         
     }
     // so luong thong bao 
     public function get_noti_count_unread($user_id){
         $user = User::find($user_id);
         $noti_count = $user->unreadnotifications->count();
         return $noti_count;
         
     }
     public function get_noti_unread($user_id){
         $user = User::find($user_id);
         foreach ($user->unreadnotifications as $notification){
             if(isset($notification->data['link'])){
                 $link = asset('noti/redirect/'.$user->id.'/'.$notification->id);
             }else{
                 $link = '#';
             }
             
             echo '<a class="dropdown-item" href="'.$link.'">';
                 echo '<span>'.$notification->data['content'].'</span>';
             echo '</a>';
 
        }
      
         
    }
    public function comment(Request $request)
    {
        $book = M_book::find($request->book_id );
         if($book == ''){ return view('errors.404');  }
         $cmt= new M_comment;
         if($request->content_id != ''){
            $content_comment = M_content_comment::find($request->content_id);
            $content = $content_comment->name;
         }else{
            $content = $request->content;
         }

         $cmt -> content= $content;
         if( Auth::user()->user_type_id == 1){
            $cmt -> status= 'on';
         }else{
            $cmt -> status= 'off';
         }
        
         $cmt -> name= Auth::user()->name;
         $cmt -> tel= Auth::user()->tel;
         $cmt -> book_id =  $book -> id;
         $cmt -> user_id =  Auth::user()-> id;
         $cmt -> review =  $request-> review;

         $cmt -> save();
         
         if(Auth::user()){
         $alert = 'cảm ơn bạn đã đánh giá';
         }else{
         $alert = 'Chưa đăng nhập';
         }
       return redirect()->back() -> with('alert',$alert);
        
    //    return redirect($request->urlCurrent.'#ModalAlert') -> with('alert',$alert);
    }

}
