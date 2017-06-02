<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $faillable = ['name','alias','price','intro','content','image','keywords','description','user_id','cate_id'];

    public $timestamps = true;
    
    public function cate (){
    	return $this->belongTo('App\cate');
    }

    public function user (){
    	return $this->belongTo('App\User');
    }
    public function pimages(){
    	return $this->hasmany('App\productimage')
    }
}

