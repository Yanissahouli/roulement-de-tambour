<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cineaste', function (Blueprint $table) {
            $table->string('imgCineaste')->nullable()->after('bioCineaste');
        });
    }
    public function down(): void
    {
        Schema::table('cineaste', function (Blueprint $table) {
            $table->dropColumn('imgCineaste');
        });
    }
};