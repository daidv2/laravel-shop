<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //public $timestamps = false;
    protected $table = 'cates';
    protected $fillable = ['name', 'alias', 'order', 'parent_id', 'keyword', 'description'];


    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
