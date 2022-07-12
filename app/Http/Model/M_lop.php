<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_lop extends Model
{
    protected $table = "lop";
	public function F_truong(){ 
		return $this->hasOne('App\Http\Model\M_truong','id','truong_id');
	}

}
