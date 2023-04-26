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
        Schema::create('questions_and_answers', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->string('banner_text');
            $table->string('title_1');
            $table->string('paragraph_1');
            $table->string('title_2');
            $table->string('paragraph_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions_and_answers');
    }
};
