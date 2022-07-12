<?php

namespace App\Http\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function F_user_type(){ 
        return $this->hasOne('App\Http\Model\M_user_type','id','user_type_id');
    }
    public function F_class(){ 
        return $this->hasOne('App\Http\Model\M_class','id','class_id');
    }
    public function F_school(){ 
        return $this->hasOne('App\Http\Model\M_school','id','school_id');
    }
    public function F_bank(){ 
        return $this->hasMany('App\Http\Model\M_bank','user_id','id');
    }
    public function F_pay_history(){ 
        return $this->hasMany('App\Http\Model\M_pay_history','user_id','id');
    }
    public function F_theme(){ 
        return $this->hasMany('App\Http\Model\M_user_theme','user_id','id');
    }
    //phan quyen
    public function F_type_role(){ 
        return $this->belongsto('App\Http\Model\M_user_type','id','user_type_id');
    }
    // thong bao 
    public function F_user_noti(){ 
        return $this->hasMany('App\Http\Model\M_user_noti','user_id','id')->where('view','off')->limit(5);
    }
    public function F_order_agency_payed(){ 
        return $this->hasMany('App\Http\Model\M_orders','coupon','coupon')->where('status','payed')->where('status_agency','payed');
    }
    public function F_order_agency_waiting(){ 
        return $this->hasMany('App\Http\Model\M_orders','coupon','coupon')->where('status','payed')->where('status_agency','waiting');
    }

  
}
