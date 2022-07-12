<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Model\User;
use App\Http\Model\M_user_type;
use App\Http\Model\M_tinh;
use App\Http\Model\M_theme;
use App\Http\Model\M_slide_img;

use App\Http\Model\M_category;
use App\Http\Model\M_company;
use App\Http\Model\M_book;
use App\Http\Model\M_orders;
use App\Http\Model\M_menu;
use App\Http\Model\M_menu_type;
use App\Http\Model\M_theme_row;
use App\Http\Model\M_sidebar;
use App\Http\Model\M_post;
use App\Http\Model\M_post_cat;

class RegisterController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


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
        
     }
    

    protected function get_create(Request $request){
        $theme = M_theme::where('type','home')->first();
   
        $title = $theme -> title_seo;
        $des = $theme -> des_seo;
        $key = $theme -> key_seo;
        $index_meta = $theme -> index_meta;

        $tinh_list = M_tinh::orderby('orderby','asc')->get();
        return view('V_regis',['tinh_list'=>$tinh_list,'theme'=>$theme,'index_meta'=>$index_meta,'title'=>$title,'key'=>$key,'des'=>$des]);
    }
    protected function post_create(Request $request)
    {


        $id_customer = M_user_type::where('type','customer')->first();
        $this -> validate($request,
           [
               'email' => 'required|unique:users,email',
               'coupon' => 'unique:users,coupon',
               'password' => 'required|min:6|max:38',
               'password_again' => 'required|same:password',
           ],
           [
               'email.required' => 'Bạn chưa nhập email thành viên',
               'email.unique' => 'Tên thành viên đã tồn tại',
               'email.email' => 'Bạn phải nhập đúng định dạng email ví dụ: info@webux.vn',

               'coupon.unique' => 'Mã thành viên đã tồn tại',

               'password.required' => 'Ban chưa nhập mật khẩu',
               'password.min' => 'Mật khẩu phải từ 6 đến 38 ký tự',
               'password.max' => 'Mật khẩu phải từ 6 đến 38 ký tự',

               'password_again.required' => 'Ban chưa nhập lại mật khẩu',
               'password_again.same' => 'Mật khẩu nhập lại chưa khớp',
               'img.mimes' => 'Ảnh phải có định dạng jpeg, bmp,png',
               'img.max' => '',
           ]);

        $user = new User;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> user_type_id ='35';
        $user -> remember_token = $request -> _token;
        $user -> name = $request -> name;
        $user -> tinh_id = $request -> tinh_id;
        $user -> huyen_id = $request ->  huyen_id;
        $user -> truong_id = $request -> truong_id;
        $user -> lop_id = $request ->  lop_id;
       
        $user -> status = 'on';
        $user -> save();  

     return redirect('auth/login') -> with('alert','Đăng thành viên thành công, bạn đăng nhập tài khoản vừa tạo');
    }
}
