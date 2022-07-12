<?php namespace App\Modules\Book\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_slide;
use App\Http\Model\M_book;
use App\Http\Model\M_book_cat;
use App\Http\Model\M_cat;
use App\Http\Model\M_company;
use App\Http\Model\M_store;
use App\Http\Model\M_tinh;
use App\Http\Model\M_huyen;
use Auth;
use DB;
use Storage;

class BookNewController extends Controller {
    public function get_book_new(){

        $this->authorize('book_edit');
         $cat = M_cat::orderby('created_at','desc')->get();
         $company = M_company::all();
         $list_tinh = M_tinh::all();
         $company = M_company::all();
         $store = M_store::all();
         return view('Book::V_book_new',['company'=>$company,'list_tinh'=>$list_tinh,'store'=>$store,'cat'=>$cat,'title' => 'Thêm mới sách']);
    }
    
    public function post_book_new_multi(Request $request) {
      $this->authorize('book_edit');
      $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập danh mục']);
      $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
      foreach($val_array as $val){
          $book = new M_book;
          $book -> name = $val;
          $book -> parent_id = $request -> parent_id;
          $book -> status = 'on';
          $book -> save();
      }
      return redirect()->back()->with('alert','Bạn đã thêm thành công');
  }
  public function post_book_new(Request $request) {
      $this->authorize('book_edit');
      $this ->validate($request,
      [ 'name'=> 'required',
        'url'=> 'required',
      ],
    [     'name.required'=> 'Bạn chưa nhập danh mục',
        'url.required'=> 'Bạn chưa có URL',
      ]);
      $company = M_company::all();

      if($request -> canon=='on') {
         $canon='on';
     }
     else {
         $canon='off';
     }

      $book = new  M_book;
      if($request -> hasFile('img')){
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
          $img_file->move('source/book/',$img);
      
      }else{
          $img = '';
      }
      $book ->  img = $img;

      $book -> name =  $request -> name;
      $book -> author =  $request -> author;
      $book -> code =  $request -> code;
      $book -> price =  $request -> price;
      $book -> tinh_id =  $request -> tinh_id;
      $book -> huyen_id =  $request -> huyen_id;
      $book -> num_pages =  $request -> num_pages;
      $book -> dientich =  $request -> dientich;
      $book -> soluong =  $request -> soluong;
      $book -> release =  $request -> release;
      $book -> company_id =  $request -> company_id;
      $book -> store_id =  $request -> store_id;
      $book -> CII =  $request -> CII;
      $book -> url =  $request -> url;
      $book -> status = 'on';
      $book -> des = $request -> des;
      $book -> content = $request -> content;
      $book -> seo_title =  $request -> seo_title;
      $book -> seo_des =  $request -> seo_des;
      $book -> key_seo =  $request -> key_seo;
      $book -> index_meta =  $request -> index_meta;
      $book -> canon = $canon;
      $book -> type = $request -> type;
      $book -> save();

      if($request-> cat){
        foreach($request-> cat as $cat_id){
           M_book_cat::insert([
              'book_id' => $book->id,
              'cat_id' => $cat_id
           ]);
        }
     }
      return redirect()->back() ->with('alert', 'Thêm sách thành công');
  }
}
