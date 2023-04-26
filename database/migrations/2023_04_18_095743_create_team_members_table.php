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
            $table->string('firstName');
            $table->string('lastName');
            $table->date('date_of_birth');
            $table->string('passportNumber');
            $table->string('passportExpiryDate');
            $table->string('photoOfPassport');
            $table->string('SSN');
            $table->integer('IdCard');
            $table->string('universityDegree');
            $table->string('aboutTeamMember');
            $table->string('uploadPhoto');
            $table->date('personanlCellNo');
            $table->date('personalEmail');
            $table->date('assignedCellNo');
            $table->date('assignedEmail');
            $table->date('homeAddress');
            $table->date('family_member_name');
            $table->date('family_member_number');
            $table->date('workContract');
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
