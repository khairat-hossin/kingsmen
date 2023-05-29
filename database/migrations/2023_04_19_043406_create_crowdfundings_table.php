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
        Schema::create('crowdfundings', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('slug');
            $table->string('project_address');
            $table->string('project_location');
            $table->string('registered_company_name');
            $table->string('company_tax_number')->nullable();
            $table->string('project_type')->nullable();
            $table->string('investment_duration')->nullable();
            $table->string('investment_duration_in_years')->nullable();
            $table->string('type_of_investment')->nullable();
            $table->string('accepted_currency')->nullable();
            $table->date('project_starting_date')->nullable();
            $table->date('project_delivery_date')->nullable();

            $table->string('land_category')->nullable();
            $table->unsignedDecimal('land_area_per_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('land_cost_per_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('total_land_cost', 20, 2)->nullable();
            $table->string('available_construction_type')->nullable();
            $table->unsignedDecimal('built_up_area_size_per_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('built_area_value_per_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('total_built_up_area_value', 20, 2)->nullable();
            $table->string('investment_in')->nullable();
            $table->unsignedDecimal('total_number_of_investment_in', 20, 2)->nullable();
            $table->unsignedDecimal('real_estate_value', 20, 2)->nullable();
            $table->unsignedDecimal('proposed_additional_investment_cost', 20, 2)->nullable();
            $table->unsignedDecimal('total_cost_of_investment', 20, 2)->nullable();
            $table->unsignedDecimal('total_registered_shares_at_local_authoritise', 20, 2)->nullable();
            $table->unsignedDecimal('shares_listed_for_sale', 20, 2)->nullable();

            $table->unsignedDecimal('project_duration_in_years', 20, 2)->nullable();
            $table->unsignedDecimal('investment_break_even_expected_after_year', 20, 2)->nullable();
            $table->string('profit_after_return_of_investment_is')->nullable();
            $table->unsignedDecimal('expected_profit_after_break_even', 20, 2)->nullable();
            $table->unsignedDecimal('expected_profit_percent_after_break_even_as_per_study',20, 2)->nullable();
            $table->unsignedDecimal('one_shares_of_ownership_of_the_land_in_sqm',20, 2)->nullable();
            $table->unsignedDecimal('one_shares_of_ownership_of_the_construction_in_sqm',20, 2)->nullable();
            $table->unsignedDecimal('one_shares_of_ownership_in_number_of_investing_in',20, 2)->nullable();
            $table->unsignedDecimal('share_price',20, 2)->nullable();
            $table->unsignedDecimal('deposit', 20, 2)->nullable();
            $table->unsignedDecimal('remaining_amount_as_bank_transfer',20, 2)->nullable();
            $table->unsignedDecimal('full_payment_in_USDT_bLockchain',20, 2)->nullable();

            $table->text('selling_contract')->nullable();
            $table->text('company_papers')->nullable();
            $table->text('buisness_plan')->nullable();
            $table->string('project_logo')->nullable();
            $table->string('crowfund_thumbnail')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('choose_template')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner_text')->nullable();
            $table->text('title_1')->nullable();
            $table->text('paragraph_1')->nullable();
            $table->text('title_2')->nullable();
            $table->text('paragraph_2')->nullable();
            $table->json('photos_gallery')->nullable();
            $table->string('project_timeline')->nullable();
            $table->string('management_companies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crowdfundings');
    }
};
