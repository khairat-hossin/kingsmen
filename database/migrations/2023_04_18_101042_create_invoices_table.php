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
            $table->string('payment_method_for_deposit');
            $table->string('payment_method_for_remaining_payments');
            $table->string('project');
            $table->unsignedDecimal('land_area_per_sqm', 12, 2);
            $table->unsignedDecimal('land_price_per_sqm', 12, 2);
            $table->string('house_type');
            $table->unsignedDecimal('house_area_per_sqm', 12, 2);
            $table->unsignedDecimal('house_price_per_sqm', 12, 2);
            $table->unsignedDecimal('land_price_includign_VAT', 12, 2);
            $table->unsignedDecimal('house_rice_includign_VAT', 12, 2);
            $table->unsignedDecimal('total_purchase_including_VAT_before_discount', 12, 2);
            $table->unsignedDecimal('downpayment', 12, 2);
            $table->string('discount');
            $table->unsignedDecimal('holding_deposit', 12, 2);
            $table->unsignedDecimal('remaining_payment', 12, 2);
            $table->unsignedDecimal('paid_monthly', 12, 2);
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
