<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_price extends Model
{
    protected $table = "price";
	
	public function F_post(){ 
		return $this->hasOne('App\Http\Model\M_post','id','post_id');
	}
	
}
