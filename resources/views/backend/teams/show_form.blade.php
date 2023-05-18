<div class="mb-3">
    <legend class="border-bottom w-100">
        Show Team Member
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'First Name';
            $field_lable = label_case($field_name);
            $value = ($team->first_name) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'first_name',  'value' => "$value", 'readonly' => 'true']) }}
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Last Name';
            $field_lable = label_case($field_name);
            $value = ($team->last_name) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'last_name',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Date of Birth';
            $field_lable = label_case($field_name);
            $value = ($team->date_of_birth) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'date_of_birth',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Passport Number';
            $field_lable = label_case($field_name);
            $value = ($team->passport_number) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'passport_number',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Passport Expiry Date';
            $field_lable = label_case($field_name);
            $value = ($team->passport_expiry_date) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'passport_expiry_date',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Passport Photo';
            $field_lable = label_case($field_name);
            $value = $team->passport_photo;

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="passport_photo" width="250" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'SSN';
            $field_lable = label_case($field_name);
            $value = ($team->ssn) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'ssn',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'ID CARD';
            $field_lable = label_case($field_name);
            $value = $team->id_card;

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="id_card" width="250" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'University Degree';
            $field_lable = label_case($field_name);
            $value = ($team->university_degree) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'university_degree',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'About Team Member';
            $field_lable = label_case($field_name);
            $value = ($team->about_team_member) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'about_team_member',  'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Position';
            $field_lable = label_case($field_name);
            $value = ($team->position) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'position', 'readonly' => 'true'])->value($value)}}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Designation';
            $field_lable = label_case($field_name);
            $value = $team->designation ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'designation',  'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Type';
            $field_lable = label_case($field_name);

            $value = $team->type ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'type', 'readonly' => 'true'])->value($value) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Upload Photo';
            $field_lable = label_case($field_name);
            $value = $team->upload_photo;

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="id_card" width="200" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Personal Cell Number';
            $field_lable = label_case($field_name);
            $value = ($team->personal_cell_number) ?? '';

            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'personal_cell_number',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Personal Email ';
            $field_lable = label_case($field_name);
            $value = ($team->personal_email) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'personal_email',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Assigned Cell Number ';
            $field_lable = label_case($field_name);
            $value = ($team->assigned_cell_number) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'assigned_cell_number',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Assigned Email ';
            $field_lable = label_case($field_name);
            $value = ($team->assigned_email) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'assigned_email',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Home Address ';
            $field_lable = label_case($field_name);
            $value = ($team->home_address) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_address',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Family Member Name ';
            $field_lable = label_case($field_name);
            $value = ($team->family_member_name) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'family_member_name',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Family Member Number';
            $field_lable = label_case($field_name);
            $value = ($team->family_member_number) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'family_member_number',  'value' => "$value", 'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Work Contract';
            $field_lable = label_case($field_name);
            $value = ($team->work_contract) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'work_contract',  'value' => "$value", 'readonly' => 'true']) }}
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
