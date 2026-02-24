<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cinema', function (Blueprint $table) {
            $table->increments('idCin');
            $table->string('nomCin', 100);
            $table->string('adrCin', 255);
            $table->string('vilCin', 255);
            $table->string('cpCin', 5);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cinema');
    }
};
