<?php namespace App\Modules\Book\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_slide;
use App\Http\Model\M_book;
use App\Http\Model\M_cat;
use App\Http\Model\M_book_cat;
use App\Http\Model\M_company;
use App\Http\Model\M_store;
use App\Http\Model\M_tinh;
use Auth;
use DB;
use Carbon\Carbon;

class BookEditController extends Controller {
    public function get_book_edit($id){
        $this->authorize('book_edit');
        $book = M_book::where('id',$id)->first();
        $list_tinh = M_tinh::all();
        $cat = M_cat::orderby('created_at','desc')->get();
        $company = M_company::all();
        $store = M_store::all();
        return view('Book::V_book_edit',['company'=>$company,'list_tinh'=>$list_tinh,'store'=>$store,'book'=>$book,'cat' => $cat,'title' => 'Sửa sách']);
    }
    // sua 
   public function post_book_edit(Request $request, $book_id) {
      $this->authorize('book_edit');

      $this ->validate($request,
      [ 'name'=> 'required',
      'url'=> 'required',
      ],
      [ 'name.required'=> 'Bạn chưa nhập danh mục',
      'url.required'=> 'Bạn chưa có URL',
      ]);

      if($request -> canon=='on') {
        $canon='on';
    }
    else {
        $canon='off';
    }

          $book = M_book::find($book_id);
          if($request -> del_img == 'del_img'){
              if($book -> img){
                 while(file_exists('source/book/'.$book ->img)){
                    unlink('source/book/'.$book ->img);
                 }
              }
              $book ->img = '';
          }
          if($request -> hasFile('img')){
              if($request -> del_img == 'del_img'){
                  while(file_exists('source/book/'.$book ->img)){
                      unlink('source/book/'.$book ->img);
                  }
                 
                  $book ->img = '';
              }
  
              $img_file = $request -> file('img');
              $exten_img = $img_file -> getClientOriginalExtension();
              if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
                  return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
              }
              $img = $img_file -> getClientOriginalName();
              
              $i=1;
              while(file_exists('source/book/'.$img)){
                  if($i == 1){
                      $img = str_replace('.','-'.$i++.'.',$img);
                  }else{
                      $a =$i-1;
                      $img = str_replace($a.'.',$i++.'.',$img);
                  }
              }
              $img_file->move('source/book',$img);
              $book ->  img = $img;
          }
          
        $release = Carbon::parse($request -> release,);
        $release = $release -> format('Y-m-d');
        $book -> release =  $release;

        
        $book -> name =  $request -> name;
        $book -> company_id =  $request -> company_id;
        $book -> author =  $request -> author;
        $book -> code =  $request -> code;
        $book -> tinh_id =  $request -> tinh_id;
        $book -> huyen_id =  $request -> huyen_id;
        $book -> price =  $request -> price;
        $book -> num_pages =  $request -> num_pages;
        $book -> dientich =  $request -> dientich;
        $book -> soluong =  $request -> soluong;
        $book -> des =  $request -> des;
        $book -> content = $request -> content;
        $book -> seo_title =  $request -> seo_title;
        $book -> seo_des =  $request -> seo_des;
        $book -> key_seo =  $request -> key_seo;
        $book -> url =  $request -> url;
        $book -> index_meta =  $request -> index_meta;
        $book -> status = 'on';
        $book -> canon = $canon;

        $book -> type = $request -> type;
        $book -> save();



         
         $book_check= M_book::where('url', $request -> url)->first();
        if($book_check=='') {
            $book_url=$request ->url;
        }
        else {
            $book_url=$request ->url;
        }

        M_book::where('id', $book->id)->update(['url'=> $book_url]);
        
        // them danh mục
        if($request-> cat){
            //xoa ban hien tai
            M_book_cat::where('book_id',$book_id)->delete();
            foreach($request-> cat as $cat_id){
               M_book_cat::insert([
                  'book_id' => $book_id,
                  'cat_id' => $cat_id
               ]);
            }
         }else{
            M_book_cat::where('book_id',$book_id)->delete();
         }

      return redirect()->back() ->with('alert', 'Sửa thành công');

      if($request-> save_list == 'on'){
        return redirect('admin/book/'.$book_url) -> with('alert','Lưu thành công tin tức');
     }elseif($request-> save_new == 'on'){
        return redirect('admin/book/'.$book_url.'/new') -> with('alert','Lưu thành công tin tức');
     }elseif($request-> save_edit == 'on'){
        return redirect('admin/book/'.$book_url.'/edit/'.$book->id) -> with('alert','Lưu thành công tin tức');         
     }
  }
// xoa 
  public function get_book_del($id){
      $this->authorize('book_edit');
 
      $book =  M_book::where('id',$id)->first();
   
       $book->delete();

      return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
  }
  
  //thay doi status
  public function get_change_status($id) {
      $this->authorize('book_edit');
      $book = M_book::where('id', $id)->first();

      if($book -> status=='off') {
          M_book::where('id', $id)->update(['status'=> 'on']);
      }
      elseif ($book -> status=='on') {
          M_book::where('id', $id)->update(['status'=> 'off']);
      }
      return redirect() ->back() ->with('alert', 'Bạn đã thay đổi thành công');
  }
}
