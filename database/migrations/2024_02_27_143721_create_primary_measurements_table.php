<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\patient;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('primary_measurements', function (Blueprint $table) {
            $table->id();
           
            $table->foreignIdFor(Patient::class)->constrained();
            $table->date('measure_date');
            $table->float('weight');
            $table->float('height');
            $table->longText('notes');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primary_measurements');
    }
};
