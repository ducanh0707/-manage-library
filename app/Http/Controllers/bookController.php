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
use App\Http\Model\M_comment;
use App\Http\Model\M_rate;

class bookController extends BaseController
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

        public function get_category(Request $request, $url){
            $theme_cat = M_theme::where('type','cat')->first();
            $theme = M_theme::where('type','home')->first();
            $cat  = M_cat::where('url',$url)->first();
    
    
            if($cat  == ''){
             return response() ->view('errors.404');
            }
             
            $book_list = M_book::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat ->id);})->where('book.status','on')->orderby('id','desc')->paginate(18);
             
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
       
             return view('V_fontend/catBook',['page_type'=>'cat','theme'=>$theme,'theme_cat'=>$theme_cat,'url'=>$url,'index_meta'=>$index_meta,'des'=>$des,'key'=>$key,'title'=>$title,'book_list'=>$book_list,'cat'=>$cat]);
        }



    public function get_book($url){


        $book = M_book::where('url',$url)->first();
        $cat=M_cat::where('status','on')->first();
        $comp=M_company::where('status','on')->first();
        if($book == ''){ return response() ->view('errors.404');  }
        // $book_list = M_book::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat ->id);})->where('book.status','on')->orderby('id','desc')->paginate(18);
        // return $count = M_rate::count()->avg(F_rate->rating);
        // return $count = M_rate::where('book_id',M);
         $comment_list = M_comment::orderby('id','desc')->where('book_id',$book->id)->where('status','on')->paginate(5);
        
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
        //key
            $key = $book->key_seo;
        
        return view('V_fontend/bookDetail',['comment_list'=>$comment_list,'page_type'=>'post','url'=>'','cat'=>'','index_meta'=>'','title'=>$title,'key'=>$key,'des'=>$des,'book' =>$book,'cat' =>$cat,'comp' =>$comp]);
        
    }

     
}

