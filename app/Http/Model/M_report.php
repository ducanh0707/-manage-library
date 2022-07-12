<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_report extends Model
{
   protected $table = "report";
   public function F_tinh(){
		return $this->hasOne('App\Http\Model\M_tinh','id','tinh_id');
	}
   public function f_huyen(){
		return $this->hasOne('App\Http\Model\M_huyen','id','huyen_id');
	}
   public function F_truong(){
		return $this->hasOne('App\Http\Model\M_truong','id','truong_id');
	}
   public function F_user(){
		return $this->hasOne('App\Http\Model\M_users','id','id_customer');
	}
   public function F_order(){
		return $this->hasOne('App\Http\Model\M_order','id','id_customer');
	}

}
