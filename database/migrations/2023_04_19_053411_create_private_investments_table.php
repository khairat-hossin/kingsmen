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
            $table->string('project_location');
            $table->string('registered_companyName');
            $table->string('comapany_tax_number');
            $table->string('project_type');
            $table->string('investment_duration');
            $table->string('investment_duration_in_years');
            $table->string('type_of_investment');
            $table->string('accepted_currency');
            $table->date('project_starting_date');
            $table->date('project_delivery_date');
            $table->string('project_duration_in_years');
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
