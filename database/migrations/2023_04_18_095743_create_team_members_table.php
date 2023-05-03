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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('passport_number');
            $table->date('passport_expiry_date');
            $table->string('passport_photo');
            $table->string('ssn');
            $table->string('id_card');
            $table->string('university_degree');
            $table->text('about_team_member');
            $table->string('position');
            $table->string('designation');
            $table->string('type');
            $table->string('upload_photo');
            $table->string('personal_cell_number');
            $table->string('personal_email');
            $table->string('assigned_cell_number');
            $table->string('assigned_email');
            $table->string('home_address');
            $table->string('family_member_name');
            $table->string('family_member_number');
            $table->string('work_contract');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
