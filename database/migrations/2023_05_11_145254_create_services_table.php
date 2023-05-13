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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('banner_text')->nullable()->maxlength();
            $table->string('banner')->nullable()->maxlength();
            $table->string('title')->nullable()->maxlength();
            $table->string('solution_title')->nullable()->maxlength();
            $table->string('solution_image')->nullable()->maxlength();
            $table->text('solution_summary')->nullable()->maxlength();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
