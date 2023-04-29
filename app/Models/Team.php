<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'team_members';

    protected $fillable = [
        "first_name",
        "last_name",
        "date_of_birth",
        "passport_number",
        "passport_expiry_date",
        "passport_photo",
        "ssn",
        "id_card",
        "university_degree",
        "about_team_member",
        "position",
        "type",
        "upload_photo",
        "personal_cell_number",
        "personal_email",
        "home_address",
        "family_member_number",
        "family_member_name",
        "assigned_cell_number",
        "assigned_email",
        "work_contract"
    ];
}
