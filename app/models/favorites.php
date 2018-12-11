<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class favorites extends Model
{
    protected $table='tbl_favorites';
    protected $guarded=['id','created_at','updated_at'];

    public function products()
    {
        return $this->hasMany(products::class,'fav_id');
    }

    public function customer()
    {
        return $this->belongsTo(customers::class);
    }
}
