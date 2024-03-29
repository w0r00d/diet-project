<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class condition extends Model
{
    use HasFactory;
    protected $fillable = ['condition_name'];
    public function mealcondition() : HasMany{
        return $this->hasMany(mealcondition::class);
    }
}
