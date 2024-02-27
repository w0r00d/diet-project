<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class measurement_record extends Model
{
    use HasFactory;

    public function patient() :BelongsTo {
        return $this->belongsTo(patient::class);
    }

    public function measurement(): BelongsTo {

        return $this->belongsTo(measurement::class);
    }
}
