<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cineaste', function (Blueprint $table) {
            $table->increments('idCineaste');
            $table->string('preCineaste', 100);
            $table->string('nomCineaste', 100);
            $table->date('datNaiCineaste');
            $table->string('natCineaste', 50);
            $table->text('bioCineaste')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cineaste');
    }
};
