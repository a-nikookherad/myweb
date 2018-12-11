<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    protected $table = 'tbl_products';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function orders()
    {
       return $this->belongsToMany(orders::class,'product_order','product_id','order_id');
    }

    public function category()
    {
        return $this->belongsTo(categories::class,'cat_id');
    }
    public function subcategories()
    {
        return $this->belongsToMany(subcategories::class,'sub_cat_id');
    }
    public function brand()
    {
        return $this->belongsTo(brands::class,'brand_id');
    }
    public function tag()
    {
        return $this->belongsTo(tags::class,'tag_id');
    }

//    public function cart()
//    {
//
//    }

    public function users()
    {
        return $this->belongsToMany(User::class,'tbl_carts','product_id','customer_id');
    }

    public function favorite()
    {
        return $this->belongsToMany(User::class,'tbl_favorites','product_id','customer_id');
    }
}
