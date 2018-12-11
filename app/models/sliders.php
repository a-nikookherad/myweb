<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    protected $table='tbl_sliders';
    protected $guarded=['id','created_at','updated_at'];
}
