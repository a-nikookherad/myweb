<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table='tbl_customers';
    protected $guarded=['id','created_at','updated_at'];

    public function cart()
    {
       return $this->hasOne(carts::class);
    }
    public function favorite()
    {
       return $this->hasOne(favorites::class);
    }
    public function shipping()
    {
       return $this->hasOne(shipping::class);
    }
    public function orders()
    {
       return $this->hasMany(orders::class,'customer_id');
    }
}
