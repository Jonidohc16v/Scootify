<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('escooters', function (Blueprint $table) {
            $table->id();
            $table->float('lat');
            $table->float('lon');
            $table->integer('battery_level');
            $table->integer('status');
            $table->foreignId('ride_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escooters');
    }
};
