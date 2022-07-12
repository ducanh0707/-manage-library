<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_pay_history extends Model
{
    protected $table = "pay_history";

	public function F_user(){ 
		return $this->hasOne('App\Http\Model\User','id','user_id');
	}
	public function F_bank(){ 
		return $this->hasOne('App\Http\Model\M_bank','id','bank_id');
	}

}
