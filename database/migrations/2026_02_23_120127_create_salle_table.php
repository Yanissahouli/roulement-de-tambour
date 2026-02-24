<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('salle', function (Blueprint $table) {
            $table->string('idSal', 50)->primary();
            $table->string('nomSalle', 100);
            $table->integer('capSal');
            $table->unsignedInteger('idCin');
            $table->foreign('idCin')
                ->references('idCin')
                ->on('cinema')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('salle');
    }
};
