<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table='tbl_categories';
    protected $guarded=['id','created_at','updated_at'];

    public function subcategories()
    {
        return $this->hasMany(subcategories::class,'cat_id','id');
    }

    public function products()
    {
        return $this->hasMany(products::class,'cat_id');
    }
}
