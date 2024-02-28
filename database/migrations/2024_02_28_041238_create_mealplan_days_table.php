<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\mealplan;
use App\Models\meal;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mealplan_days', function (Blueprint $table) {
            $table->id();
            $table->string('weekday');
            $table->foreignIdFor(mealplan::class);
            $table->unsignedBigInteger('breakfast');
            $table->foreign('breakfast')->references('id')->on('meals');

            $table->unsignedBigInteger('lunch');
            $table->foreign('lunch')->references('id')->on('meals');
            
            $table->unsignedBigInteger('dinner');
            $table->foreign('dinner')->references('id')->on('meals');

              $table->unsignedBigInteger('snack');
            $table->foreign('snack')->references('id')->on('meals');

            $table->tinyText('notes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mealplan_days');
    }
};
