<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table='tbl_orders';
    protected $guarded=['id','created_at','updated_at'];

    public function products()
    {
       return $this->belongsToMany(products::class,'product_order','order_id','product_id');
    }

    public function customer()
    {
        return $this->belongsTo(customers::class,'customer_id');
    }
}
