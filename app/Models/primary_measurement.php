<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use  Database\Factories\PrimaryMeasurementFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
class primary_measurement extends Model
{
    use HasFactory;
    protected $fillable =['measure_date', 'weight', 'height','notes'];
    public function patient() :BelongsTo {
        return $this->belongsTo(patient::class);
    }

    protected static function newFactory(): Factory
{
    return PrimaryMeasurementFactory::new();
}
}
