<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Hash;
use Auth;
use App\Http\Model\User;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
  
    public function get_login(){
        if (Auth::check()) {
            if(Auth::user()->user_type_id == 1 or  Auth::user()->user_type_id == 2){
                return redirect('admin/dashboard');
            }elseif(Auth::user()->user_type_id == 35){
                return redirect('');
            }
        } else {
            return view('V_login');
        }
    }

    public function post_login(LoginRequest $request)
    {
        $login = [
            'email'=> $request-> email,
            'password' => $request-> password,
            'status' => 'on',
        ];
        if (Auth::attempt($login)) {
            if(Auth::user()->user_type_id == 1 or  Auth::user()->user_type_id == 2 or  Auth::user()->user_type_id == 4 or  Auth::user()->user_type_id == 5 or  Auth::user()->user_type_id == 6){
                return redirect('admin/dashboard');
            } elseif(Auth::user()->user_type_id == 35){
                return redirect('');
            }
        } else {
            return redirect()->back()->with('alert', 'Email hoặc Password không chính xác');
        }
    }

    public function getlogout(){
        Auth::logout();
        return redirect('');
    }
}
