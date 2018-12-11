<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    protected $table='tbl_subcategories';
    protected $guarded=['id','created_at','updated_at'];

    public function category()
    {
        $this->belongsTo(categories::class,'cat_id');
    }
    public function products(){
        return $this->hasMany(products::class,'sub_cat_id','id');
    }
}
