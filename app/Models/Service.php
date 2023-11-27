<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }

    public function user_service(){
        return $this->belongsTo(user_service::class);
    }

    public $timestamps = false;
}