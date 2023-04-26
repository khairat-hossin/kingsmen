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
            $table->integer('id_no');
            $table->string('added_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('client_type');
            $table->string('buisness_position');
            $table->double('budget', 8, 2);
            $table->string('location');
            $table->string('reffered_by')->nullable();
            $table->text('note')->nullable();
            $table->date('date_of_birth');
            $table->string('citizenship');
            $table->string('passport_number')->nullable();
            $table->string('passport_expiry_date')->nullable();
            $table->string('photo_of_passport')->nullable();
            $table->string('photo_of_id_card')->nullable();
            $table->string('exact_address');
            $table->string('PO_box')->nullable();
            $table->string('name_of_the_bank_you_work_with')->nullable();
            $table->string('card_details_for_downpayment')->nullable();
            $table->string('bank_acc_with_6_month_history')->nullable();
            $table->string('crypto_wallet')->nullable();
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
