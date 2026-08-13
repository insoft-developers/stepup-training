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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('theme');
            $table->string('title');
            $table->date('start_at');
            $table->date('finish_at');
            $table->string('paragraph');
            $table->string('detail_image')->nullable();
            $table->string('thumb_image')->nullable();
            $table->string('client_header_text');
            $table->string('problem_small_title');
            $table->string('problem_title');
            $table->string('problem_subtitle');
            $table->string('problem_item_icon_1');
            $table->string('problem_item_title_1');
            $table->string('problem_item_text_1');

            $table->string('problem_item_icon_2');
            $table->string('problem_item_title_2');
            $table->string('problem_item_text_2');

            $table->string('problem_item_icon_3');
            $table->string('problem_item_title_3');
            $table->string('problem_item_text_3');

            $table->string('benefit_small_title');
            $table->string('benefit_title');
            $table->string('benefit_subtitle');
            $table->longText('why_paragraph');
            $table->string('course_small_title');
            $table->string('course_title');
            $table->string('course_subtitle');
            $table->string('outline_small_title');
            $table->string('outline_title');
            $table->string('outline_subtitle');
            $table->string('wajib_ikut_header_text');
            $table->string('testi_header_text');
            $table->string('price_small_title');
            $table->string('price_title');
            $table->string('price_subtitle');
            $table->string('facility_small_title');
            $table->string('facility_title');
            $table->string('facility_subtitle');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
