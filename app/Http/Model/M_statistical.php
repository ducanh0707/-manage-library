<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_statistical extends Model
{
    protected $table = "ket_toan";

    public function F_user(){ 
		  return $this->hasOne('App\Http\Model\M_users','id','user_id');
     } 
    
  
}
