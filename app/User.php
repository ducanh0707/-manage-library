<?php

namespace App;

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
  
    //phan quyen
    public function F_type_role(){ 
        return $this->belongsto('App\Http\Model\M_user_type','id','user_type_id');
    }
    public function F_class(){ 
        return $this->hasOne('App\Http\Model\M_class','id','class_id');
    }
    public function F_school(){ 
        return $this->hasOne('App\Http\Model\M_school','id','school_id');
    }
}
