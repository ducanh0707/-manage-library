<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_users extends Model
{
    protected $table = "users";
  
   public function F_huyen(){ 
    return $this->hasOne('App\Http\Model\M_huyen','id','huyen_id');
    }
    public function F_truong(){ 
        return $this->hasOne('App\Http\Model\M_truong','id','truong_id');
    }  
    public function F_tinh(){ 
        return $this->hasOne('App\Http\Model\M_tinh','id','tinh_id');
    }
    public function F_level(){ 
        return $this->hasOne('App\Http\Model\M_level','id','level_id');
    }
    public function F_type_role(){ 
        return $this->belongsto('App\Http\Model\M_user_type','id','user_type_id');
    }
    public function f_type(){ 
        return $this->hasOne('App\Http\Model\M_user_type','id','user_type_id');
    }
}
