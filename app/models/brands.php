<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    //
    protected $table='tbl_brands';
    protected $guarded=['id','created_at','updated_at'];

    public function products()
    {
       return $this->hasMany(products::class,'brand_id','id');
    }
}
