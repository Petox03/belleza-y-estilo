<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function service(){
        return $this->hasMany(Service::class);
    }
    public function schedule(){
        return $this->hasMany(Schedule::class);
    }
    public function status(){
        return $this->hasMany(Status::class);
    }
}
