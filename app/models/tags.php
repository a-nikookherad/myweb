<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $table='tbl_tags';
    protected $guarded=['id','created_at','updated_at'];

    public function products()
    {
        $this->hasMany(products::class,'tag_id');
    }
}
