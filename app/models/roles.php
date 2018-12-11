<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public function users()
    {
        $this->hasOne(User::class,'user_role','name');
    }
}
