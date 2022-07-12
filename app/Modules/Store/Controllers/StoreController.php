<?php namespace App\Modules\Store\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_cat;
use App\Http\Model\M_slide;
use App\Http\Model\M_store;
use App\Http\Model\M_tinh;
use App\Http\Model\M_huyen;
use Auth;
use DB;

class StoreController extends Controller {

    public function index(Request $request) {
        $this->authorize('store_view');

        $list_tinh= M_tinh::get();
        $list_huyen= M_huyen::get();
        $store = M_store::orderby('created_at', 'desc');
        if($request -> type != ''){
            $store = $store->where('type',$request->type);
        }
        //  neu so dang nhap
        if(Auth::user()->user_type_id == 2){
            $store = $store->where('tinh_id',Auth::user()->tinh_id);
        }
         //  neu phong dang nhap
         if(Auth::user()->user_type_id == 4){
            $store = $store->where('tinh_id',Auth::user()->tinh_id)->where('huyen_id',Auth::user()->huyen_id);
        }

        $store = $store->get();
        $cat = M_cat::orderby('id', 'desc')->get();

    
        return view('Store::index', ['store'=> $store,'cat'=>$cat,'list_huyen'=>$list_huyen,'list_tinh'=>$list_tinh, 'title'=>'Kho Sách']);
    }


    public function post_store_new_multi(Request $request) {
        $this->authorize('store_edit');
        $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập danh mục']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
        foreach($val_array as $val){
            $store = new M_store;
            $store -> name = $val;
            $store -> url = change_title_to_url($val);
            $store -> parent_id = $request -> parent_id;
            $store -> status = 'on';
            $store -> save();
        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
    }
    public function post_store_new(Request $request) {
        $this->authorize('store_edit');
        $this ->validate($request,
            [ 'name'=> 'required',
           
            ],
            [ 'name.required'=> 'Bạn chưa nhập danh mục',
            ]);

    
        $store = new  M_store;

        $store -> name =  $request -> name;
        $store -> status = 'on';
        $store -> parent_id = $request -> parent_id;
        $store -> des = $request -> des;
        $store -> manage = $request -> manage;
        $store -> phone = $request -> phone;
        $store -> address = $request -> address;
        $store -> type = $request -> type;
        $store -> tinh_id = $request -> tinh_id;
        $store -> huyen_id = $request -> huyen_id;
        $store -> truong_id = $request -> truong_id;
        $store -> save();
      
        return redirect()->back() ->with('alert', 'Thêm thành công');
    }

// sua 
  
    public function post_store_edit(Request $request, $store_id) {
        $this->authorize('store_edit');
        $cat = M_cat::orderby('id', 'desc')->get();

        $this ->validate($request,
            [ 'name'=> 'required',
           
            ],
            [ 'name.required'=> 'Bạn chưa nhập danh mục',
         
            ]);

        $store = M_store::find($store_id);
        $store -> name =  $request -> name;
        $store -> status = 'on';
        $store -> parent_id = $request -> parent_id;
        $store -> des = $request -> des;
        $store -> manage = $request -> manage;
        $store -> phone = $request -> phone;
        $store -> address = $request -> address;
        $store -> type = $request -> type;
        $store -> tinh_id = $request -> tinh_id;
        $store -> huyen_id = $request -> huyen_id;
        $store -> truong_id = $request -> truong_id;
        $store -> save();
        return redirect()->back() ->with('alert', 'Sửa thành công');
    }
// xoa 
    public function get_store_del($id){
        $this->authorize('store_edit');
   
        $store =  M_store::where('id',$id)->first();
     
         $store->delete();

        return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
    }
    
    //thay doi status
    public function get_change_status($id) {
        $this->authorize('store_edit');
        $store = M_store::where('id', $id)->first();

        if($store -> status=='off') {
            M_store::where('id', $id)->update(['status'=> 'on']);
        }
        elseif ($store -> status=='on') {
            M_store::where('id', $id)->update(['status'=> 'off']);
        }
        return redirect() ->back() ->with('alert', 'Bạn đã thay đổi thành công');
    }

}
