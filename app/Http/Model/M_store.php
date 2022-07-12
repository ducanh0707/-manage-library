<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_store extends Model
{
    protected $table = "store";
    public function F_tinh(){ 
		return $this->hasOne('App\Http\Model\M_tinh','id','tinh_id')->orderby('id','asc');
    }
	public function F_huyen(){ 
		return $this->hasOne('App\Http\Model\M_huyen','id','huyen_id')->orderby('id','asc');
    }
}
