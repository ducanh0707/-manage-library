<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_Commission extends Model
{
    protected $table = "hoa_hong";
    public function F_type_user(){ 
        return $this->hasOne('App\Http\Model\M_user_type','id','user_id');
    }
    public function F_user(){ 
        return $this->hasOne('App\Http\Model\M_users','id','user_id');
    }
	
}
