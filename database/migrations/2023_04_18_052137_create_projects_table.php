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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_logo')->nullable();
            $table->string('project_name');
            $table->string('address');
            $table->string('project_location');
            $table->string('registered_company_name');
            $table->string('comapany_tax_number')->nullable();
            $table->string('project_type');
            $table->integer('duration_in_years')->nullable();
            $table->string('accepted_currency')->nullable();
            $table->date('starting_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->double('area_starting_per_sqm', 8, 2)->nullable();
            $table->double('price_starting_per_sqm', 8, 2)->nullable();
            $table->double('land_price_starting', 8, 2)->nullable();
            $table->string('land_number')->nullable();
            $table->string('land_category')->nullable();
            $table->double('land_area', 8, 2)->nullable();
            $table->double('land_price_per_sqm', 8, 2)->nullable();
            $table->double('total_land_price', 8, 2)->nullable();
            $table->string('all_listings')->nullable();
            $table->string('interactive_map')->nullable();
            $table->string('house_type')->nullable();
            $table->string('houseArea_per_sqm')->nullable();
            $table->string('costOfConstruction_per_sqm')->nullable();
            $table->string('technical_specs')->nullable();
            $table->string('total_construction_cost')->nullable();
            $table->string('category')->nullable();
            $table->double('total_price_with_land', 8, 2)->nullable();
            $table->double('deposit', 8, 2)->nullable();
            $table->double('remainingAmount_as_bankTransfer', 8, 2)->nullable();
            $table->string('selling_contract')->nullable();
            $table->string('company_papers')->nullable();
            $table->string('project_rules_and_regulation')->nullable();
            $table->string('other_files')->nullable();
            $table->string('project_thumbnail')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('template')->nullable();
            $table->string('home_page_banner')->nullable();
            $table->string('home_page_banner_text')->nullable();
            $table->string('home_page_header_title')->nullable();
            $table->string('home_page_header_paragraph')->nullable();
            $table->string('home_page_footer_title')->nullable();
            $table->string('home_page_footer_paragraph')->nullable();
            $table->string('home_page_photos_gallery')->nullable();
            $table->string('project_timeline')->nullable();
            $table->string('project_management_companies')->nullable();

            $table->string('qna_page_banner')->nullable();
            $table->string('qna_page_banner_text')->nullable();
            $table->string('qna_page_header_title')->nullable();
            $table->string('qna_page_header_paragraph')->nullable();
            $table->string('qna_page_footer_title')->nullable();
            $table->string('qna_page_footer_paragraph')->nullable();
            
            $table->string('buy_home_page_banner')->nullable();
            $table->string('buy_home_page_banner_text')->nullable();
            $table->string('buy_home_page_header_title')->nullable();
            $table->string('buy_home_page_header_paragraph')->nullable();
            $table->string('buy_home_page_footer_title')->nullable();
            $table->string('buy_home_page_footer_paragraph')->nullable();
            
            $table->string('buy_land_page_banner')->nullable();
            $table->string('buy_land_page_banner_text')->nullable();
            $table->string('buy_land_page_header_title')->nullable();
            $table->string('buy_land_page_header_paragraph')->nullable();
            $table->string('buy_land_page_footer_title')->nullable();
            $table->string('buy_land_page_footer_paragraph')->nullable();
            
            $table->string('amenities_page_banner')->nullable();
            $table->string('amenities_page_banner_text')->nullable();
            $table->string('amenities_page_header_title')->nullable();
            $table->string('amenities_page_header_paragraph')->nullable();
            $table->string('amenities_page_footer_title')->nullable();
            $table->string('amenities_page_footer_paragraph')->nullable();
            
            $table->string('financing_page_banner')->nullable();
            $table->string('financing_page_banner_text')->nullable();
            $table->string('financing_page_header_title')->nullable();
            $table->string('financing_page_header_paragraph')->nullable();
            $table->string('financing_page_footer_title')->nullable();
            $table->string('financing_page_footer_paragraph')->nullable();
            
            $table->string('who_page_banner')->nullable();
            $table->string('who_page_banner_text')->nullable();
            $table->string('who_page_header_title')->nullable();
            $table->string('who_page_header_paragraph')->nullable();
            $table->string('who_page_footer_title')->nullable();
            $table->string('who_page_footer_paragraph')->nullable();
            
            $table->string('contact_page_banner')->nullable();
            $table->string('contact_page_banner_text')->nullable();
            $table->string('contact_page_header_title')->nullable();
            $table->string('contact_page_header_paragraph')->nullable();
            $table->string('contact_page_footer_title')->nullable();
            $table->string('contact_page_footer_paragraph')->nullable();


            $table->string('kingsmen_details')->nullable();
            $table->string('project_address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('project_brochure')->nullable();
            $table->string('project_elevations')->nullable();
            $table->string('construction_rules')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
