<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productimage extends Model
{
    protected $table = 'productimages';
    protected $faillable = ['name','alias','product_id'];

    public $timestamps = true;

    public function product (){
    	return $this->belongTo('App\product');
    }
}
