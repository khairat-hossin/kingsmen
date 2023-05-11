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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            // $table->string('banner_text_1')->nullable()->maxlength();
            // $table->string('banner_text_2')->nullable()->maxlength();
            // $table->text('banner')->nullable()->maxlength();
            // $table->string('title_before_video')->nullable()->maxlength();
            // $table->string('message_text')->nullable()->maxlength();
            // $table->string('name')->nullable()->maxlength();
            // $table->string('designation')->nullable()->maxlength();
            // $table->string('company_name')->nullable()->maxlength();
            // $table->string('button')->nullable()->maxlength();
            // $table->string('button_title')->nullable()->maxlength();
            // $table->string('button_link')->nullable()->maxlength();

            // $table->string('title_before_card')->nullable()->maxlength();
            // $table->string('card_title')->nullable()->maxlength();
            // $table->string('card_image')->nullable()->maxlength();
            // $table->text('card_summary')->nullable()->maxlength();
            // $table->string('type')->nullable()->maxlength();
            // $table->string('duration')->nullable()->maxlength();
            // $table->string('card_title')->nullable()->maxlength();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
