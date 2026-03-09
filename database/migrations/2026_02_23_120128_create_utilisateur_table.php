<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('idUti');
            $table->string('nomUti', 100);
            $table->string('preUti', 100);
            $table->string('mailUtil', 191)->unique();
            $table->string('mdpUti', 255);
            $table->string('rolUti', 20)->default('user');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utilisateur');
    }
};
