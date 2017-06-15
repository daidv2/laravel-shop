<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //public $timestamps = false;
    protected $table = 'products';
    protected $fillable = ['name', 'alias', 'price', 'intro', 'content', 'image', 'keyword', 'description', 'user_id', 'cate_id'];

    public function cate()
    {
        return $this->belongTo('App\Cate');
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function product_images()
    {
        return $this->hasMany('App\ProductImage');
    }
}
