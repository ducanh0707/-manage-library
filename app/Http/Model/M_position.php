<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_position extends Model
{
    protected $table = "position";
    public function F_org(){ 
		return $this->hasOne('App\Http\Model\M_org','id','org_id');
	}
	
}
