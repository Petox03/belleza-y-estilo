<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_services extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class);
    }

    public function service(){
        return $this->hasMany(Service::class);
    }
}
