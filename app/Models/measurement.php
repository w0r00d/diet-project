<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class measurement extends Model
{
    use HasFactory;

    public function measurement_record() : hasMany{
      return  $this->hasMany(measurement_record::class);
    }
}
