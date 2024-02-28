<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class patient extends Model
{
    use HasFactory;

    public function primary_measurements() :hasMany {

        return $this->hasMany(primary_measurement::class);
    }

    public function measurement_record() :hasMany{
        return $this->hasMany(measurement_record::class);
    }

    public function mealplans(): hasMany{
        return $this->hasMany(mealplan::class);
    }
}
