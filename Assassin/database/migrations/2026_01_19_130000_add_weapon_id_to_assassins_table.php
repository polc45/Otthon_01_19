<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assassins', function (Blueprint $table) {
            $table->unsignedBigInteger('weapon_id')->nullable()->after('skill');
            $table->foreign('weapon_id')->references('id')->on('weapons')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assassins', function (Blueprint $table) {
            $table->dropForeign(['weapon_id']);
            $table->dropColumn('weapon_id');
        });
    }
};

//ez a file copilottal lett generálva, mert magamtól nem tudom megcsinálni.