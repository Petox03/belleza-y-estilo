<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): HasMany{
        return $this->hasMany(User::class);
    }
    public function service(): HasMany{
        return $this->hasMany(Service::class);
    }
    public function schedule(): HasMany{
        return $this->hasMany(Schedule::class);
    }
    public function status(): HasMany{
        return $this->hasMany(Status::class);
    }

    public $timestamps = false;
}
