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
        Schema::create('private_investments', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_address');
            $table->string('project_location');
            $table->string('registered_company_name');
            $table->string('company_tax_number')->nullable();
            $table->string('project_type')->nullable();
            $table->string('investment_duration')->nullable();
            $table->string('investment_duration_in_years')->nullable();
            $table->string('investment_duration_in_years_2')->nullable();
            $table->string('type_of_investment')->nullable();
            $table->string('accepted_currency')->nullable();
            $table->date('project_starting_date')->nullable();
            $table->date('project_delivery_date')->nullable();
            $table->unsignedDecimal('project_duration_in_years', 20, 2)->nullable();
            $table->string('land_category')->nullable();
            $table->unsignedDecimal('land_area_in_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('land_cost_per_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('total_land_cost', 20, 2)->nullable();
            $table->string('project_duration_in_years_before_generating_profit')->nullable();
            $table->string('available_construction_type')->nullable();
            $table->unsignedDecimal('built_up_area_size_per_sqm', 20, 2)->nullable();
            $table->unsignedDecimal('built_up_area_value_per_sqm', 20, 2)->nullable();
            $table->string('investment_in')->nullable();
            $table->unsignedDecimal('total_built_up_area_value', 20, 2)->nullable();
            $table->unsignedDecimal('total_number_of_investment_in', 20, 2)->nullable();
            $table->unsignedDecimal('proposed_additional_investment_cost', 20, 2)->nullable();
            $table->unsignedDecimal('real_estate_value', 20, 2)->nullable();
            $table->unsignedDecimal('total_cost_of_investment', 20, 2)->nullable();
            $table->unsignedDecimal('shares_listed_for_sale', 20, 2)->nullable();
            $table->unsignedDecimal('investment_break_even_expected_at_year', 20, 2)->nullable();
            $table->string('profit_after_return_on_investment_is')->nullable();
            $table->unsignedDecimal('expected_profit_after_break_even', 20, 2)->nullable();
            $table->unsignedDecimal('expected_profit_percent_after_break_even_as_per_study',20, 2)->nullable();
            $table->unsignedDecimal('deposit', 20, 2)->nullable();
            $table->unsignedDecimal('remaining_amount_as_bank_transfer',20, 2)->nullable();
            $table->string('shares_selling_contract')->nullable();
            $table->string('company_papers')->nullable();
            $table->string('buisness_plan')->nullable();
            $table->string('project_logo')->nullable();
            $table->string('crowfund_thumbnail')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('choose_template')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner_text')->nullable();
            $table->string('title_1')->nullable();
            $table->string('paragraph_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('paragraph_2')->nullable();
            $table->json('photo_gallery')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_investments');
    }
};
