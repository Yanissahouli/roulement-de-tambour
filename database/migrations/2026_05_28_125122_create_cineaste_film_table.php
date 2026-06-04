<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cineaste_film', function (Blueprint $table) {
            $table->unsignedInteger('idCineaste');
            $table->unsignedInteger('idFilm');
            $table->primary(['idCineaste', 'idFilm']);
            $table->foreign('idCineaste')->references('idCineaste')->on('cineaste')->onDelete('cascade');
            $table->foreign('idFilm')->references('idFilm')->on('film')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('cineaste_film');
    }
};