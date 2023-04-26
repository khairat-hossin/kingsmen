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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('paymentMethodForDeposit');
            $table->string('paymentMethodForRemainingPayments');
            $table->string('project');
            $table->double('landAreaPerSqm', 8, 2);
            $table->double('landPricePerSqm', 8, 2);
            $table->string('HouseType');
            $table->double('HouseAreaPerSqm', 8, 2);
            $table->double('HousePricePerSqm', 8, 2);
            $table->double('landPriceIncludignVAT', 8, 2);
            $table->double('housePriceIncludignVAT', 8, 2);
            $table->double('totalPurchaseIncludingVAT_beforeDiscount', 8, 2);
            $table->double('downpayment', 8, 2);
            $table->string('discount');
            $table->double('holdingDeposit', 8, 2);
            $table->double('remainingPayment', 8, 2);
            $table->double('paidMonthly', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
