<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('composer', function (Blueprint $table) {
            $table->unsignedInteger('idFilm');
            $table->unsignedInteger('idCineaste');
            $table->primary(['idFilm', 'idCineaste']);
            $table->foreign('idFilm')->references('idFilm')->on('film');
            $table->foreign('idCineaste')->references('idCineaste')->on('cineaste');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('composer');
    }
};
