<?php namespace App\Modules\Slide\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_slide;
use App\Http\Model\M_slide_img;
use Auth;
use DB;

class SlideImageController extends Controller {
    public function get_slide_img_list($slide_id){
        $this->authorize('slide_view');

        $slide_img = M_slide_img::where('slide_id',$slide_id)->orderby('orderby','asc')->paginate(30);
        $slide = M_slide::find($slide_id);
         return view('Slide::V_slide_img_list',['title'=>'Danh sách slide','slide_img'=>$slide_img,'slide'=>$slide,'slide_id'=>$slide_id]);
     }
  
        // them 
     public function post_slide_img_new(Request $request,$slide_id){
        $this->authorize('slide_edit');
        $this -> validate($request,['title' => 'required',],['title.required' => 'Bạn chưa nhập tiêu đề',]);
         
        if($request -> hasFile('img')){
               $img_file = $request -> file('img');
               $exten_img = $img_file -> getClientOriginalExtension();
               if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
               return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
               }
               $img = $img_file -> getClientOriginalName();
       
               
               $i=1;
               while(file_exists('source/slide/'.$img)){
                  if($i == 1){
                     $img = str_replace('.','-'.$i++.'.',$img);
                  }else{
                     $a =$i-1;
                     $img = str_replace($a.'.',$i++.'.',$img);
                  }
               }
               $img_file->move('source/slide/',$img);
             
         }else{
               $img = '';
         }

         if($request -> hasFile('img_2')){
            $img_file = $request -> file('img_2');
            $exten_img = $img_file -> getClientOriginalExtension();
            
            $img_2 = $img_file -> getClientOriginalName();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            
            $i=1;
               while(file_exists('source/slide/'.$img_2)){
                  if($i == 1){
                     $img_2 = str_replace('.','-'.$i++.'.',$img_2);
                  }else{
                     $a =$i-1;
                     $img_2 = str_replace($a.'.',$i++.'.',$img_2);
                  }
               }
               $img_file->move('source/slide/',$img_2);
        }else{
         $img_2 = '';
       }

        M_slide_img:: insert([
           'title' => $request -> title,
           'css_id' => $request -> css_id,
            'css_class' => $request -> css_class,
            'status' => 'on',
            'img' => $img,
            'img_2' => $img_2,
           'des' => $request -> des,
   
           'button' => $request -> button,

           'link' => $request -> link,
           'link_button' => $request -> link_button,
 
           'slide_id' => $slide_id,
           'orderby' => $request -> orderby,
        ]);
  
           return redirect() -> back() -> with('alert','Thêm thành công ảnh');
     }


     public function post_slide_img_new_fast(Request $request, $slide_id){
        $this->authorize('slide_edit');
         if($request -> img_fast !=''){
            foreach($request-> img_fast as $key_img => $img_file){
               if($request -> hasFile('img_fast.'.$key_img)){
                  $exten_img = $img_file -> getClientOriginalExtension();
                  if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG'){return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg');}
                  $img = $img_file -> getClientOriginalName();
                  $i=1;
                  while(file_exists('source/slide/'.$img)){
                     if($i == 1){
                        $img = str_replace('.','-'.$i++.'.',$img);
                     }else{
                        $a = $i-1;
                        $img = str_replace($a.'.',$i++.'.',$img);
                     }
                  }
                  $img_file->move('source/slide/',$img);
               }
               M_slide_img:: insert([
                  'title' => $key_img+1,
                  'status' => 'on',
                  'img' => $img,
                  'slide_id' => $slide_id,
                  'orderby' => $key_img+1,
               ]);
            }
         }
         return redirect() -> back() -> with('alert','Thêm thành công ảnh');
     }
     
     // sua 
     public function post_slide_img_edit(Request $request,$slide_id,$id){
        $this->authorize('slide_edit');
        $this -> validate($request,['title' => 'required',],['title.required' => 'Bạn chưa nhập tiêu đề',]);

        if($request -> del_img == 'del_img'){
               $slide = M_slide_img::find($id);
               if($slide -> img){
                  while(file_exists('source/slide/'.$slide->img)){
                     unlink('source/slide/'.$slide->img);
                  }
               }
               M_slide_img::where('id',$id) -> update(['img'=> '']);
         }else{
               if($request -> hasFile('img')){
                  $img_file = $request -> file('img');
                  $exten_img = $img_file -> getClientOriginalExtension();
                  if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
                  return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
                  }
                  $img = $img_file -> getClientOriginalName();
                  
                  $i=1;
                  while(file_exists('source/slide/'.$img)){
                     if($i == 1){
                           $img = str_replace('.','-'.$i++.'.',$img);
                     }else{
                           $a =$i-1;
                           $img = str_replace($a.'.',$i++.'.',$img);
                     }
                  }
                  $img_file->move('source/slide/',$img);
                  M_slide_img::where('id',$id) -> update(['img'=> $img]);
               }
         }

         if($request -> del_img_2 == 'del_img_2'){
            $slide = M_slide_img::find($id);
            if($slide -> img_2){
                while(file_exists('source/slide/'.$slide->img_2)){
                    unlink('source/slide/'.$slide->img_2);
                }
            }
            M_slide_img::where('id',$id) -> update(['img'=> '']);
        }
        if($request -> hasFile('img_2')){
            $img_file = $request -> file('img_2');
            $exten_img = $img_file -> getClientOriginalExtension();

            
            $img = $img_file -> getClientOriginalName();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            
            $i=1;
            while(file_exists('source/slide/'.$img)){
                if($i == 1){$img = str_replace('.','-'.$i++.'.',$img); }else{$a =$i-1;$img = str_replace($a.'.',$i++.'.',$img); }
            }
        
            $img_file->move('source/slide/',$img);
            M_slide_img::where('id',$id) -> update(['img_2'=>$img]);
        }
        
    
        M_slide_img::where('id',$id)-> update([
           'title' => $request -> title,
           'css_id' => $request -> css_id,
              'css_class' => $request -> css_class,
              'status' => 'on',
           'des' => $request -> des,
           'button' => $request -> button,
       
           'link' => $request -> link,
           'link_button' => $request -> link_button,
 
           'slide_id' => $slide_id,
           'orderby' => $request -> orderby,
        ]);
  
        return redirect() -> back() -> with('alert','Sửa thành công slide');
     }
  
     // xoa 
     public function get_slide_img_del(Request $request,$slide_id,$id){
        $this->authorize('slide_edit');
        $slide_img = M_slide_img::where('id',$id)->first();

        if($slide_img -> img  != '' or $slide_img -> img != null){
            while(file_exists('source/slide/'.$slide_img-> img)){
               unlink('source/slide/'.$slide_img -> img) ;
            }
         }

        $slide_img = M_slide_img::where('id',$id)->delete();
        return redirect() -> back() -> with('alert','Xóa thành công hình ảnh');
     }
  
      //thay doi status
      public function get_change_img_status($slide_id,$id){
        $this->authorize('slide_edit');

        $slide_img = M_slide_img::where('id',$id)->first();
        if($slide_img -> status == 'on'){
           $slide_img = M_slide_img::where('id',$id)->update(['status'=>'off']);
           return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
        }else{
           $slide_img = M_slide_img::where('id',$id)->update(['status'=>'on']);
           return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
        }
     }
}
