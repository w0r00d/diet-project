<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class meal extends Model
{
    use HasFactory;
    protected $fillable = ['meal_name', 'meal_type', 'meal_desc','calories'];
    public function mealcondition() : HasMany{
        return $this->hasMany(mealcondition::class);
    }
}
