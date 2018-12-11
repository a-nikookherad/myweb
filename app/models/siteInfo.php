<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class siteInfo extends Model
{
    //
    protected $table='site_infos';
    protected $guarded=['id','create_at','update_at'];
    protected $primaryKey='id';


}
