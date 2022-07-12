<?php namespace App\Modules\Post\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_post;
use App\Http\Model\M_post_type;
use App\Http\Model\M_post_cat;
use App\Http\Model\M_cat;
use App\Http\Model\M_gift_code;
use App\Http\Model\M_slide_img;
use App\Http\Model\M_file;
use App\Http\Model\M_price;
use App\Http\Model\M_theme;
use Auth;
use DB;
use Storage;

class PostNewController extends Controller {
    public function get_post_new($post_type){

        $this->authorize('post_edit');
         $cat = M_cat::orderby('created_at','desc')->get();
         $post_type = M_post_type::where('url',$post_type)->first();
         $theme_list = M_theme::select('id','title')->where('type','theme')->get();

         return view('Post::V_post_new',['theme_list'=>$theme_list,'post_type'=>$post_type,'cat'=>$cat,'title' => 'Thêm mới bài viết']);
    }
   public function get_post_product(Request $request,$post_type){
      $post_type = M_post_type::where('url','san-pham')->first();
      $product_list = M_post::where('post_type_id',$post_type ->id)->get();
      return view('Post::product_list',['product_list'=>$product_list,'title' => 'Danh sách sản phẩm']);
   }
    public function get_post_import(Request $request,$post_type){
         $this->authorize('post_edit');
         if($request -> file){;
            if($request -> hasFile('file')){
               $file_file = $request -> file('file');
               $exten_file = $file_file -> getClientOriginalExtension();
               if($exten_file != 'xlsx') {
               return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file xlsx)');
               }
               $file = $file_file -> getClientOriginalName();
               $i=1;
               while(file_exists('source/price/'.$file)){
                  if($i == 1){
                     $file = str_replace('.','-'.$i++.'.',$file);
                  }else{
                     $a =$i-1;
                     $file = str_replace($a.'.',$i++.'.',$file);
                  }
               }
               $file_file->move('source/price/',$file);
            }else{
               $file = '';
            }
         }else{
            $file='';
         }

         return view('Post::post_import',['title' => 'Nhập excel']);
    }
    

     
    // them moi 
    public function post_post_new(Request $request,$post_type_url){

        if($request-> cat == ''){return redirect()->back()->with('alert_error','Bạn chưa chọn danh mục');};
        $this->authorize('post_edit');

        $this -> validate($request,
           [
              'title' => 'required',
              'url' => 'required',
              'img' => 'max:5250'
           ],
           [
              'title.required' => 'Bạn chưa nhập tiêu đề',
              'url.required' => 'Đường dẫn (URL) bắt buộc phải có',
              'img.max' => 'Kích ảnh đại diện chỉ bé hơn 5Mb'
           ]);
  
        if($request -> canon == 'on'){
           $canon = 'on';
        }else{
           $canon = 'off';
        }
        if($request -> pin == 'on'){
           $pin = 'on';
        }else{
           $pin = 'off';
        }
        if($request -> hasFile('img')){
            $img_file = $request -> file('img');
            $exten_img = $img_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $img = $img_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/post/'.$img)){
                if($i == 1){
                    $img = str_replace('.','-'.$i++.'.',$img);
                }else{
                    $a =$i-1;
                    $img = str_replace($a.'.',$i++.'.',$img);
                }
            }
            $img_file->move('source/post/',$img);
        }else{
            $img = '';
        }

        $post_type = M_post_type::where('url',$post_type_url)->first();

         $post = new M_post;
         $post -> title = $request -> title;
         $post -> title_seo = $request -> title_seo;
         $post -> key_seo = $request -> key_seo;
         $post -> content = $request -> content;
         $post -> des_seo = $request -> des_seo;
         $post -> des = $request -> des;
         $post -> status = $request -> status;
         $post -> index_meta = $request -> index_meta;
         $post -> user_id = $request -> user_id;
         $post -> canon = $canon;
         $post -> pin = $pin;
         $post -> img = $img;
         $post -> post_type_id = $post_type->id;
         $post -> price = $request -> price;
         $post -> price_km = $request -> price_km;
         $post -> code_km = $request -> code_km;
         $post -> code_product = $request -> code_product;
         $post -> index_product = $request -> index_product;
         $post -> color = $request -> color;
         $post -> view =  0;
         $post -> review = $request -> review;
         $post -> orderby = $request -> orderby;
         $post -> theme_id = $request-> theme_id;
        $post -> comment = $request-> comment;
        $post -> video = $request-> video;
        $post -> icon = $request-> icon;

        $post -> save();

        //gia 
        if($request -> price_month){
            foreach($request -> price_month as $price_val){
                $price = new M_price;
                $price -> post_id = $post->id;
                $price -> status = 'on';
                $price -> month = $price_val['month'];
                $price -> price = $price_val['price'];
                $price -> price_old = $price_val['price_old'];
                $price -> type = $post_type->id;
                $price -> save();
            }
        }

        // them slide 
        if($request -> slide !=''){
            foreach($request-> slide as $key_img => $img_file){
               if($request -> hasFile('slide.'.$key_img)){
                  $exten_img = $img_file -> getClientOriginalExtension();
                  if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG'){return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg');}
                  $img = $img_file -> getClientOriginalName();
                  $i=1;
                  while(file_exists('source/post/'.$img)){
                     if($i == 1){
                        $img = str_replace('.','-'.$i++.'.',$img);
                     }else{
                        $a = $i-1;
                        $img = str_replace($a.'.',$i++.'.',$img);
                     }
                  }
                  $img_file->move('source/post/',$img);
               }
               M_slide_img:: insert([
                  'status' => 'on',
                  'img' => $img,
                  'post_id' => $post->id,
                  'orderby' => $key_img+1,
               ]);
            }
        }
        //them file tai lieu
        if($request -> file !=''){
            foreach($request-> file as $key_file => $file_file){
               if($request -> hasFile('file.'.$key_file)){
                  $exten_file = $file_file -> getClientOriginalExtension();
                  if($exten_file != 'pdf' && $exten_file != 'PDF' && $exten_file != 'DOC' && $exten_file != 'doc' && $exten_file != 'docx' && $exten_file != 'DOCX'){return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .pdf .doc');}
                  $file = $file_file -> getClientOriginalName();
                  $i=1;
                  while(file_exists('source/post/'.$file)){
                     if($i == 1){
                        $file = str_replace('.','-'.$i++.'.',$file);
                     }else{
                        $a = $i-1;
                        $file = str_replace($a.'.',$i++.'.',$file);
                     }
                  }
                  $file_file->move('source/post/',$file);
               }
               M_file:: insert([
                  'name' => $file,
                  'post_id' => $post->id,
               ]);
            }
        }

      //them danh muc
         if($request-> cat){
            foreach($request-> cat as $cat_id){
               M_post_cat::insert([
                  'post_id' => $post->id,
                  'cat_id' => $cat_id
               ]);
            }
         }
         $post_check =M_post::where('url',$request -> url)->first();
         if(isset($post_check -> url )){
            if($post_check -> id == $post->id){
              $post_url = $request -> url;
            }else{
              $post_url = $request -> url.'-'.$post->id;
           }
        }else{
          $post_url = $request -> url;
        }
        M_post::where('id',$post->id)->update(['url' => $post_url]);

  
       if($request-> save_list == 'on'){
           return redirect('admin/post/'.$post_type_url) -> with('alert','Lưu thành công tin tức');
        }elseif($request-> save_new == 'on'){
           return redirect('admin/post/'.$post_type_url.'/new') -> with('alert','Lưu thành công tin tức');
        }elseif($request-> save_edit == 'on'){
           return redirect('admin/post/'.$post_type_url.'/edit/'.$post->id) -> with('alert','Lưu thành công tin tức');         
        }
     }

}
