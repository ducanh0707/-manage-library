<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_truong extends Model
{
    protected $table = "truong";
	public function F_lop(){ 
		return $this->hasMany('App\Http\Model\M_lop','lop_id','id');
	}
	public function F_huyen(){ 
		return $this->hasOne('App\Http\Model\M_huyen','id','huyen_id');
	}

}
