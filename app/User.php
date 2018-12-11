<?php

namespace App;

use App\models\carts;
use App\models\products;
use App\models\roles;
use App\models\shipping;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','role','active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }

    public function products()
    {
        return $this->belongsToMany(products::class,'tbl_carts','customer_id','product_id')->withPivot('product_qty','id');
    }
    public function favorites()
    {
        return $this->belongsToMany(products::class,'tbl_favorites','customer_id','product_id')->withPivot('id');
    }

    public function shipping()
    {
        return $this->hasOne(shipping::class,'customer_id');
    }

}
