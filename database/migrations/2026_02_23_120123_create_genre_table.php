<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genre', function (Blueprint $table) {
            $table->increments('idGen');
            $table->string('libGen', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genre');
    }
};
