<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $table='tbl_carts';
    protected $guarded=['created_at','updated_at'];



//    public function customer()
//    {
//        return $this->belongsTo(customers::class,'id');
//    }
//
//    public function products()
//    {
//        return $this->hasMany(products::class,'cart_id');
//    }
}
