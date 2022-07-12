<?php namespace App\Modules\Company\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_slide;
use App\Http\Model\M_company;
use Auth;
use DB;

class CompanyController extends Controller {

   
    public function index() {
        $this->authorize('company_view');
        $company = M_company::orderby('created_at', 'desc')->get();
    
        return view('Company::index', ['company'=> $company, 'title'=>'Danh mục nhà xuất bản ']);
    }


    public function post_company_new_multi(Request $request) {
        $this->authorize('company_edit');
        $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập danh mục']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
        foreach($val_array as $val){
            $company = new M_company;
            $company -> name = $val;
            $company -> url = change_title_to_url($val);
            $company -> parent_id = $request -> parent_id;
            $company -> status = 'on';
            $company -> save();
        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
    }
    public function post_company_new(Request $request) {
        $this->authorize('company_edit');
        $this ->validate($request,
            [ 'name'=> 'required',
            ],
            [ 'name.required'=> 'Bạn chưa nhập danh mục',
            ]);

    
        $company = new  M_company;
        $company -> code =  $request -> code;
        $company -> name =  $request -> name;
        $company -> address =  $request -> address;
        $company -> status = 'on';
        $company -> des = $request -> des;
        $company -> save();
      
        return redirect()->back() ->with('alert', 'Thêm thành công');
    }

// sua 
  
    public function post_company_edit(Request $request, $company_id) {
        $this->authorize('company_edit');

        $this ->validate($request,
            [ 'name'=> 'required',
           
            ],
            [ 'name.required'=> 'Bạn chưa nhập danh mục',
         
            ]);

        $company = M_company::find($company_id);
        $company -> code =  $request -> code;
        $company -> name =  $request -> name;
        $company -> address =  $request -> address;
        $company -> status = 'on';
        $company -> des = $request -> des;
        $company -> save();

        return redirect()->back() ->with('alert', 'Sửa thành công');
    }
// xoa 
    public function get_company_del($id){
        $this->authorize('company_edit');
   
        $company =  M_company::where('id',$id)->first();
     
         $company->delete();

        return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
    }
    
    //thay doi status
    public function get_change_status($id) {
        $this->authorize('company_edit');
        $company = M_company::where('id', $id)->first();

        if($company -> status=='off') {
            M_company::where('id', $id)->update(['status'=> 'on']);
        }
        elseif ($company -> status=='on') {
            M_company::where('id', $id)->update(['status'=> 'off']);
        }
        return redirect() ->back() ->with('alert', 'Bạn đã thay đổi thành công');
    }

}
