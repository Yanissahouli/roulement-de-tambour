<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film', function (Blueprint $table) {
            $table->increments('idFilm');
            $table->string('titFilm', 200);
            $table->text('desFilm');
            $table->date('annsorFilm');
            
            $table->string('lanFilm', 50);
            $table->time('durFilm');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
