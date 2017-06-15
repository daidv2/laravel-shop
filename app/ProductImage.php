<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //public $timestamps = false;
    protected $table = 'product_images';
    protected $fillable = ['image', 'product_id'];

    public function product()
    {
        return $this->belongTo('App\Product');
    }
}
