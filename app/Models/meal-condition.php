<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mealcondition extends Model
{
    use HasFactory;

    public function meal(): BelongsTo{
        return $this->belongsTo(meal::class);
    }

    public function condition(): BelongsTo{
        return $this->belongsTo(condition::class);
    }
}
