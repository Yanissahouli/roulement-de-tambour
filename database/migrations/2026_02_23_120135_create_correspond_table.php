<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('correspond', function (Blueprint $table) {
            $table->unsignedInteger('idSeance');
            $table->unsignedInteger('idFilm');
            $table->primary(['idSeance', 'idFilm']);
            $table->foreign('idSeance')->references('idSeance')->on('seance');
            $table->foreign('idFilm')->references('idFilm')->on('film');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('correspond');
    }
};
