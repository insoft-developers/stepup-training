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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('small_title');
            $table->string('title_text');
            $table->string('paragraph');
            $table->string('message_header');
            $table->string('message_subtitle')->nullable();
            $table->string('name_label');
            $table->string('email_label');
            $table->string('phone_label');
            $table->string('subject_label');
            $table->string('message_label');
            $table->string('name_placeholder_text');
            $table->string('email_placeholder_text');
            $table->string('phone_placeholder_text');
            $table->string('subject_placeholder_text');
            $table->string('message_placeholder_text');
            $table->string('button_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
