<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_ke_toan extends Model
{
    protected $table = "ke_toan";
	
	public function F_user(){ 
		return $this->hasOne('App\Http\Model\User','id','user_id');
	}

}
