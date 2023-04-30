<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
    'first_name',
    'last_name',
    'email', 
    'phone', 
    'id_no', 
    'action',
    'client_type',
    'buisness_position',
    'budget',
    'location',
    'added_date',
    'reffered_by',
    'note',
    'date_of_birth',
    'team_member',
    'project_or_investment',
    'citizenship',
    'passport_number',
    'passport_expiry_date',
    'photo_of_passport',
    'id_card_text',
    'photo_of_id_card', 
    'exact_address',
    'PO_box',
    'name_of_the_bank_you_work_with',
    'card_details_for_downpayment',
    'bank_acc_with_6_month_history',
    'crypto_wallet',
    ]; 
}
