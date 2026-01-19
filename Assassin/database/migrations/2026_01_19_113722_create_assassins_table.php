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
        Schema::create('assassins', function (Blueprint $table) {
            $table->id();
            $table->string("codename");
            $table->text("description");
            $table->integer("age")->unsigned();
            $table->enum("skill", ["high", "medium", "low"])->default("medium");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assassins');
    }
};
