<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\M_domain;
use App\Http\Model\M_type_permission;
use App\Http\Model\M_permission;
use Auth;
use DB;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\View\View;


class checkAdminLogin {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $user = Auth::user();
            if ($user->status == 'on'){
                if($user->user_type_id == 1 or $user->user_type_id == 2 or $user->user_type_id == 5  or $user->user_type_id == 6 or $user->user_type_id == 4){
                    return $next($request);
                }else{
                    Auth::logout();
                    return redirect('');
                }
            }
            else{
                Auth::logout();
                return redirect('');
            }
        } else
            return redirect('');

    }
}
