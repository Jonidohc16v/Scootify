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
        Schema::create('stations', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
            $table->string('address');
            $table->float('lat');
            $table->float('lon');
            $table->integer('capacity');
            $table->string('photo');
		    $table->foreignId('user_id')->nullable();
		    $table->foreignId('escooters_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stations');
    }
};
