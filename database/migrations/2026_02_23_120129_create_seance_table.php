<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seance', function (Blueprint $table) {
            $table->increments('idSeance');
            $table->string('nomSeance', 50);
            $table->decimal('tarifSeance', 15, 2);
            $table->dateTime('dateSeance');
            $table->string('idSal', 50);
            $table->foreign('idSal')->references('idSal')->on('salle');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seance');
    }
};
