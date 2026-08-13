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
        Schema::table('information', function (Blueprint $table) {
            $table->string('client_title')->nullable()->after('tiktok');
            $table->string('training_title')->nullable()->after('client_title');
            $table->string('training_cta_more')->nullable()->after('training_title');
            $table->string('inhouse_title')->nullable()->after('training_cta_more');
            $table->string('inhouse_subtitle')->nullable()->after('inhouse_title');
            $table->string('custom_text')->nullable()->after('inhouse_subtitle');
            $table->string('custom_cta_text')->nullable()->after('custom_text');
            $table->string('btn_top_text')->nullable()->after('custom_cta_text');
            


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('information', function (Blueprint $table) {
            //
        });
    }
};
