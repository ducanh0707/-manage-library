<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_level extends Model
{
    protected $table = "level";
    public function F_user(){ 
		return $this->hasMany('App\Http\Model\User','level_id','id');
	}
	
}
