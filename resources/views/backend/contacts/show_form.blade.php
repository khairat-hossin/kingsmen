<div class="row mb-3">
    <div class="col-12 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'First Name';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->first_name)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "first_name", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Last Name';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->last_name)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "last_name", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Email';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->email)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "email", ]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Phone';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->phone)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "phone",  ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'ID NO';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->id_no)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "id_no",  ]) }}
        </div>
    </div>
    <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Client Type';
            $field_lable = label_case($field_name);
            $value = $contact->client_type ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->client_type)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'client_type', ])->value($value) }}
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Buisness Position';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->buisness_position)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "buisness_position", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Budget';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->budget)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "budget", ]) }}
        </div>
    </div>
    <div class="form-group col-6 col-md-4">
            <?php
            $field_name = 'Location';
            $field_lable = label_case($field_name);

            $value = $contact->location ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->location)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'location', ])->value($value) }}
        </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Date';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->added_date)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "added_date", ]) }}
        </div>
    </div>
</div>
<legend class="border-bottom w-100">Reffered By</legend>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Reffered By ';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->reffered_by)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "reffered_by", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Note';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->value($contact->note)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "note", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Date of Birth';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->date_of_birth)->class('form-control form-control-sm ')->attributes(['readonly' => true, "name" => "date_of_birth", ]) }}
        </div>
    </div>
</div>
<legend class="border-bottom w-100">Assign to</legend>
<div class="row mb-3">
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Team Member';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->team_member)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "team_member", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Project Or Investment';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->project_or_investment)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "project_or_investment", ]) }}
        </div>
    </div>
</div>
<legend class="border-bottom w-100">By Client From Portal</legend>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Citizenship';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->citizenship)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "citizenship", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Passport Number';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->passport_number)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "passport_number" ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Passport Expiry Date';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->passport_expiry_date)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "passport_expiry_date", ]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Passport Photo';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $contact->photo_of_passport) }}" alt="home_page_banner" width="200" height="100">
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'ID CARD (if Armenian)';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->id_card_text)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "id_card_text", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'ID CARD Photo';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $contact->photo_of_id_card) }}" alt="photo_of_id_card" width="200" height="100">
        </div>
    </div>

</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Exact Address';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->exact_address)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "exact_address", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'PO Box';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->PO_box)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "PO_box", ]) }}
        </div>
    </div>
</div>
<legend class="border-bottom w-100">Payment Information From Portal</legend>
<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Name of the Bank You Work With';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->name_of_the_bank_you_work_with)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "name_of_the_bank_you_work_with", ]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'CARD DETAILS FOR DOWNPAYMENT';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->card_details_for_downpayment)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "card_details_for_downpayment", ]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Bank Account With 6 Month History Showing Your Exact Billing Address';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->bank_acc_with_6_month_history)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "bank_acc_with_6_month_history", ]) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Connect Crypto Wallet';
            $field_lable = label_case($field_name);

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->value($contact->crypto_wallet)->class('form-control form-control-sm')->attributes(['readonly' => true, "name" => "crypto_wallet", ]) }}
        </div>
    </div>
</div>

<style>
    input[type=text] {
        background-color: rgb(229, 231, 233);
    }

    input[type=text]:focus {
        background-color:rgb(229, 231, 233);
    }

    textarea {
        width: 300px;
        height: 100px;
        background-color: rgb(229, 231, 233) !important;
    }
</style>
