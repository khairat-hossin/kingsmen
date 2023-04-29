<div class="row mb-3">
    <div class="col-12 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'First Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "first_name", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Last Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "last_name", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Email';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "email", "$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">    
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Phone';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "phone", "type" => "number", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'ID NO';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "id_no", "type" => "number", "$required"]) }}
        </div>
    </div>
    <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Client Type';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'End-user' => 'End-user',
                'Investor' => 'Investor',
                'Connection' => 'Connection',
            ];
            $value = old('client_type') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'client_ype', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('client_ype')
                <span class="error">{{ $message }}</span>
            @enderror
    </div>    
</div>
<div class="row mb-3">    
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Buisness Position';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "buisness_position ", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Budget';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "budget", "$required"]) }}
        </div>
    </div>
    <div class="form-group col-6 col-md-4">
            <?php
            $field_name = 'Location';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Country Name 1' => 'Country Name 1',
                'Country Name 2' => 'Country Name 2',
                'Country Name 3' => 'Country Name 3',
                'Country Name 4' => 'Country Name 4',
            ];
            $value = old('location') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'location', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('location')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
</div>

<legend class="border-bottom w-100">Reffered By</legend>Country
<div class="row mb-3">    
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Reffered By ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "reffered_by", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Note';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "note", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Date of Birth';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "date_of_birth ", "$required"]) }}
        </div>
    </div>
</div>
<legend class="border-bottom w-100">Assing to</legend>
<div class="row mb-3">    
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Team Member';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "team_member ", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Project Or Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "project_or_investment ", "$required"]) }}
        </div>
    </div>    
</div>
<legend class="border-bottom w-100">Add By Client From Portal</legend>
<div class="row mb-3">    
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Citizenship';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "citizenship", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Passport Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "passport_numbe", "type"=>"number", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Passport Expiry Date';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "passport_expiry_date", "$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Passport Photo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(["name" => "photo_of_passport", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'ID CARD (if Armenian)';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "id_card_text", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'Exact Address';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "exact_address", "$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'PO Box';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "PO_box ", "$required"]) }}
        </div>
    </div>    
</div>
<legend class="border-bottom w-100">Add Payment Information From Portal</legend>
<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Name of the Bank You Work With';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "name_of_the_bank_you_work_with", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'ADD CARD DETAILS FOR DOWNPAYMENT';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "card_details_for_downpayment", "$required"]) }}
        </div>
    </div>    
</div>
<div class="row mb-3">
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Bank Account With 6 Month History Showing Your Exact Billing Address';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "bank_acc_with_6_month_history", "$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Connect Crypto Wallet';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control form-control-sm')->attributes(["name" => "crypto_wallet", "$required"]) }}
        </div>
    </div>    
</div>

