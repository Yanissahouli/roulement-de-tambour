<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diffuser', function (Blueprint $table) {
            $table->unsignedInteger('idCin');
            $table->unsignedInteger('idFilm');
            $table->primary(['idCin', 'idFilm']);
            $table->foreign('idCin')->references('idCin')->on('cinema');
            $table->foreign('idFilm')->references('idFilm')->on('film');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diffuser');
    }
};
