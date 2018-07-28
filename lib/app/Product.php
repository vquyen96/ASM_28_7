<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'pro_id';
    protected $guarded = [];

     public function cate()
    {
        return $this->belongsTo('App\Cate', 'pro_cate_id');
    }
}
