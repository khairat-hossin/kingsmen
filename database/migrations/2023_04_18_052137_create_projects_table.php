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
            $table->string('project_logo')->nullable()->limit(255);
            $table->string('project_name')->limit(255);
            $table->text('address');
            $table->string('project_location')->limit(255);
            $table->string('slug');
            $table->string('registered_company_name')->limit(255);
            $table->string('comapany_tax_number')->nullable()->limit(255);
            $table->string('project_type')->limit(255);
            $table->integer('project_duration_in_years')->nullable();
            $table->string('accepted_currency')->nullable()->limit(255);
            $table->date('starting_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->unsignedDecimal('area_starting_per_sqm', 8, 2)->nullable();
            $table->unsignedDecimal('price_starting_per_sqm', 8, 2)->nullable();
            $table->unsignedDecimal('land_price_starting', 8, 2)->nullable();
            $table->string('land_number')->nullable()->limit(255);
            $table->string('land_category')->nullable()->limit(255);
            $table->unsignedDecimal('land_area', 8, 2)->nullable();
            $table->unsignedDecimal('land_price_per_sqm', 8, 2)->nullable();
            $table->unsignedDecimal('total_land_price', 8, 2)->nullable();
            $table->text('all_listings_land')->nullable();
            $table->string('interactive_map')->nullable()->limit(255);
            $table->string('house_type')->nullable()->limit(255);
            $table->string('house_area_per_sqm')->nullable()->limit(255);
            $table->string('cost_of_construction_per_sqm')->nullable()->limit(255);
            $table->text('all_listings_house')->nullable();
            $table->string('technical_specs')->nullable()->limit(255);
            $table->string('total_construction_cost')->nullable()->limit(255);
            $table->string('category')->nullable()->limit(255);
            $table->unsignedDecimal('total_price_with_land', 8, 2)->nullable();
            $table->unsignedDecimal('deposit', 8, 2)->nullable();            
            $table->unsignedDecimal('remainingAmount_as_bankTransfer', 8, 2)->nullable();
            $table->unsignedDecimal('full_payment_usdt', 8, 2)->nullable();
            $table->string('selling_contract')->nullable()->limit(255);
            $table->string('company_papers')->nullable()->limit(255);
            $table->string('project_rules_and_regulation')->nullable()->limit(255);
            $table->string('other_files')->nullable()->limit(255);
            $table->string('project_thumbnail')->nullable()->limit(255);
            $table->string('title')->nullable()->limit(255);
            $table->text('description')->nullable();
            $table->string('template')->nullable()->limit(255);
            $table->string('home_page_banner')->nullable()->limit(255);
            $table->string('home_page_banner_text')->nullable()->limit(255);
            $table->text('home_page_header_title')->nullable();
            $table->text('home_page_header_paragraph')->nullable();
            $table->text('home_page_footer_title')->nullable();
            $table->text('home_page_footer_paragraph')->nullable();
            $table->json('home_page_photos_gallery')->nullable();
            $table->text('project_timeline')->nullable();
            $table->string('project_management_companies')->nullable()->limit(255);

            $table->string('qna_page_banner')->nullable()->limit(255);
            $table->string('qna_page_banner_text')->nullable()->limit(255);
            $table->text('qna_page_header_title')->nullable();
            $table->text('qna_page_header_paragraph')->nullable();
            $table->text('qna_page_footer_title')->nullable();
            $table->text('qna_page_footer_paragraph')->nullable();

            $table->string('buy_home_page_banner')->nullable()->limit(255);
            $table->string('buy_home_page_banner_text')->nullable()->limit(255);
            $table->text('buy_home_page_header_title')->nullable();
            $table->text('buy_home_page_header_paragraph')->nullable();
            $table->text('buy_home_page_footer_title')->nullable();
            $table->text('buy_home_page_footer_paragraph')->nullable();

            $table->string('buy_land_page_banner')->nullable()->limit(255);
            $table->string('buy_land_page_banner_text')->nullable()->limit(255);
            $table->text('buy_land_page_header_title')->nullable();
            $table->text('buy_land_page_header_paragraph')->nullable();
            $table->text('buy_land_page_footer_title')->nullable();
            $table->text('buy_land_page_footer_paragraph')->nullable();

            $table->string('amenities_page_banner')->nullable()->limit(255);
            $table->string('amenities_page_banner_text')->nullable()->limit(255);
            $table->text('amenities_page_header_title')->nullable();
            $table->text('amenities_page_header_paragraph')->nullable();
            $table->text('amenities_page_footer_title')->nullable();
            $table->text('amenities_page_footer_paragraph')->nullable();

            $table->string('financing_page_banner')->nullable()->limit(255);
            $table->string('financing_page_banner_text')->nullable()->limit(255);
            $table->text('financing_page_header_title')->nullable();
            $table->text('financing_page_header_paragraph')->nullable();
            $table->text('financing_page_footer_title')->nullable();
            $table->text('financing_page_footer_paragraph')->nullable();

            $table->string('who_page_banner')->nullable()->limit(255);
            $table->string('who_page_banner_text')->nullable()->limit(255);
            $table->text('who_page_header_title')->nullable();
            $table->text('who_page_header_paragraph')->nullable();
            $table->text('who_page_footer_title')->nullable();
            $table->text('who_page_footer_paragraph')->nullable();

            $table->string('contact_page_banner')->nullable()->limit(255);
            $table->string('contact_page_banner_text')->nullable()->limit(255);
            $table->text('contact_page_header_title')->nullable();
            $table->text('contact_page_header_paragraph')->nullable();
            $table->text('contact_page_footer_title')->nullable();
            $table->text('contact_page_footer_paragraph')->nullable();

            $table->text('kingsmen_details')->nullable();
            $table->text('project_address')->nullable();
            $table->string('phone_number')->nullable()->limit(255);
            $table->string('email')->nullable()->limit(255);
            $table->string('project_brochure')->nullable()->limit(255);
            $table->string('project_elevations')->nullable()->limit(255);
            $table->string('construction_rules')->nullable()->limit(255);
            $table->string('other')->nullable()->limit(255);
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
