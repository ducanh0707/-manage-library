<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_org extends Model
{
    protected $table = "org";

	public function F_position(){ 
		return $this->hasMany('App\Http\Model\M_postion','org_id','id');
	}
}
