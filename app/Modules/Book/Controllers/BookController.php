<?php namespace App\Modules\Book\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_slide;
use App\Http\Model\M_book;
use App\Http\Model\M_store;
use App\Http\Model\M_bookegory;
use App\Http\Model\M_company;
use Auth;
use DB;

class BookController extends Controller {

   
    public function index() {
        $this->authorize('book_view');
        $book = M_book::orderby('id', 'desc');

          //  neu so dang nhap
        //   whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat ->id);})
        if(Auth::user()->user_type_id == 2){
            $tinh_id = Auth::user()->tinh_id;
            $book =  $book->where('tinh_id',Auth::user()->tinh_id);
        }
         //  neu phong dang nhap
        if(Auth::user()->user_type_id == 4){
            $book = $book->where('tinh_id',Auth::user()->tinh_id)->where('huyen_id',Auth::user()->huyen_id);
        }
        // neu truong dang nhap
       
        if(Auth::user()->user_type_id == 5){
            $truong_id = Auth::user()->truong_id;
            $store = M_store::where('truong_id',$truong_id)->first();
            $book = $book->where('store_id',$store->id);
        }


        $book = $book->get();

        $company = M_company::all();
    
        return view('Book::index', ['company'=>$company,'book'=> $book, 'title'=>'Quản lý sách']);
    }
    



}
