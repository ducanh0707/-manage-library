<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_orders extends Model
{
    protected $table = "orders";
    public function F_post(){ 
		return $this->hasOne('App\Http\Model\M_post','id','post_id');
	}
    public function F_user(){ 
		return $this->hasOne('App\Http\Model\User','id','user_id');
	}
	public function F_book(){
		return $this->hasOne('App\Http\Model\M_book','id','book_id');
	}

}
