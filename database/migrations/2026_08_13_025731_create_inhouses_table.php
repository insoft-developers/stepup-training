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
        Schema::create('inhouses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('theme');
            $table->string('duration');
            $table->string('title');
            $table->text('paragraph');
            $table->string('audience');
            $table->string('location');
            $table->string('cta_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inhouses');
    }
};
