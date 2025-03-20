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
        Schema::create('aeroports', function (Blueprint $table) {
            $table->id();
            $table->string('nom' , 100);
            $table->string('code_iata' , 3);
            $table->string('ville' , 50);
            $table->string('pays' , 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aeroports');
    }
};
