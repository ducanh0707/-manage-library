<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_huyen extends Model
{
    protected $table = "huyen";
    public function F_tinh(){ 
      return $this->hasOne('App\Http\Model\M_tinh','id','tinh_id');
    }
    public function F_truong(){ 
      return $this->hasMany('App\Http\Model\M_truong','huyen_id','id');
    }
}
