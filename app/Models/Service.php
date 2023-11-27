<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function appointment(): BelongsTo{
        return $this->belongsTo(Appointment::class);
    }

    public function user_service(): BelongsTo{
        return $this->belongsTo(user_service::class);
    }

    public $timestamps = false;
}
