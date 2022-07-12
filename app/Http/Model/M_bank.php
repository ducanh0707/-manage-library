<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_bank extends Model
{
    protected $table = "bank";

	public function F_user(){ 
		return $this->hasOne('App\Http\Model\User','id','user_id');
	}
	
}
