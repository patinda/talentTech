<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('prenoms');
        $table->string('numero_cnib')->unique();
        $table->date('date_delivrance');
        $table->date('date_expiration');
        $table->string('telephone_secondaire')->nullable();
        $table->date('date_naissance');
        $table->string('lieu_naissance');
        $table->string('lieu_delivrance');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
