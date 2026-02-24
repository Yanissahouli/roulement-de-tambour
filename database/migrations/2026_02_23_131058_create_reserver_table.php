<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reserver', function (Blueprint $table) {
            $table->unsignedInteger('idUti');
            $table->unsignedInteger('idSeance');
            $table->string('nbPers', 50);
            $table->primary(['idUti', 'idSeance']);
            $table->foreign('idUti')->references('idUti')->on('utilisateur');
            $table->foreign('idSeance')->references('idSeance')->on('seance');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reserver');
    }
};
