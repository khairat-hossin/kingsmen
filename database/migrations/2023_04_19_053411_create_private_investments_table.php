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
            $table->double('project_duration_in_years', 8,2)->nullable();
            $table->string('land_category')->nullable();
            $table->double('land_area_in_sqm', 8, 2)->nullable();
            $table->double('land_cost_per_sqm', 8, 2)->nullable();
            $table->double('total_land_cost', 8, 2)->nullable();
            $table->string('project_duration_in_years_before_generating_profit')->nullable();
            $table->string('available_construction_type')->nullable();
            $table->double('built_up_area_size_per_sqm', 8, 2)->nullable();
            $table->double('built_up_area_value_per_sqm', 8, 2)->nullable();
            $table->string('investment_in')->nullable();
            $table->double('total_built_up_area_value', 8, 2)->nullable();
            $table->double('total_number_of_investment_in', 8, 2)->nullable();
            $table->double('proposed_additional_investment_cost', 8, 2)->nullable();
            $table->double('real_state_value', 8, 2)->nullable();
            $table->double('total_cost_of_investment', 8, 2)->nullable();
            $table->double('shares_listed_for_sale', 8, 2)->nullable();
            $table->double('investment_break_even_expected_at_year', 8, 2)->nullable();
            $table->string('profit_after_return_on_investment_is')->nullable();
            $table->double('expected_profit_after_break_even', 8, 2)->nullable();
            $table->double('expected_profit_percent_after_break_even_as_per_study',8,2)->nullable();
            $table->double('deposit', 8, 2)->nullable();
            $table->double('remaining_amount_as_bank_transfer',8,2)->nullable();
            $table->string('selling_contract')->nullable();
            $table->string('company_papers')->nullable();
            $table->string('project_rules_and_regulation')->nullable();
            $table->string('other_files')->nullable();
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
            $table->string('photo_gallery')->nullable();
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
