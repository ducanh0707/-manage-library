<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_tinh extends Model
{
    protected $table = "tinh";
	public function F_huyen(){ 
		return $this->hasMany('App\Http\Model\M_huyen','tinh_id','id');
	}
	public function F_user_tinh(){ 
		return $this->hasOne('App\Http\Model\M_user_tinh','tinh_id','id');
	}
	public function f_store(){ 
		return $this->hasOne('App\Http\Model\M_user_tinh','tinh_id','id');
	}
	// public function F_tinh(){
	// 	return $this->hasOne('App\Http\Model\M_report','id','tinh_id');
	// }
}
