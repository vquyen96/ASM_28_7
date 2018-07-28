<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';
    protected $primaryKey = 'cate_id';
    protected $guarded = [];
 
 	public function products(){
 		return $this->hasMany('App\Product', 'pro_cate_id', 'cate_id');
 	}   
}
