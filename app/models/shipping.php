<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
    protected $table='tbl_shipping';
    protected $guarded=['id','created_at','updated_at'];

//    public function customer()
//    {
//       return $this->belongsTo(customers::class);
//    }


}
