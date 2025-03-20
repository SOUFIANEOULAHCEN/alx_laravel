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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('numero_vol', 10);
            $table->foreignId('aeroport_depart_id')->constrained('aeroports')->onDelete('cascade');
            $table->foreignId('aeroport_arrivee_id')->constrained('aeroports')->onDelete('cascade');
            $table->dateTime('date_heure_depart');
            $table->dateTime('date_heure_arrivee');
            $table->enum('statut', ['ouvert', 'ferme', 'retarde', 'annule'])->default('ouvert');
            $table->decimal('prix', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
