<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    function user_role()
    {
        return $this->hasMany(Role::class);
    }


    public function getAvatarAttribute($value)
    {
        return url("images/") . "/" . $value;
    }
}