<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avoir', function (Blueprint $table) {
            $table->unsignedInteger('idFilm');
            $table->unsignedInteger('idGen');
            $table->primary(['idFilm', 'idGen']);
            $table->foreign('idFilm')->references('idFilm')->on('film');
            $table->foreign('idGen')->references('idGen')->on('genre');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avoir');
    }
};
