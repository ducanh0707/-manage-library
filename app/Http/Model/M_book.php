<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class M_book  extends Model
{
    protected $table = "book";

    public function F_company(){ 
		  return $this->hasOne('App\Http\Model\M_company','id','company_id');
     } 
    public function F_orders(){ 
		  return $this->hasOne('App\Http\Model\M_orders','book_id','id');
     } 
    public function F_category(){ 
      return $this->hasMany('App\Http\Model\M_category','id','category_id');
	  }
    public function F_store(){ 
      return $this->hasOne('App\Http\Model\M_store','id','store_id');
    }
    public function F_cat(){ 
      return $this->belongstoMany('App\Http\Model\M_cat','book_cat','book_id','cat_id');
    }
    public function F_rate(){ 
      return $this->hasOne('App\Http\Model\M_cat','book_cat','book_id','cat_id');
    }
  
}
