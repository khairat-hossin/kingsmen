<div class="mb-3">
    <legend class="border-bottom w-100">
        Add Team Member
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'First Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->first_name) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'first_name', "$required", 'value' => "$value"]) }}
            @error('first_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Last Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->last_name) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'last_name', "$required", 'value' => "$value"]) }}
            @error('last_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Date of Birth';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->date_of_birth) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->class('form-control form-control-sm')->attributes(['name' => 'date_of_birth', "$required", 'value' => "$value"]) }}
            @error('date_of_birth')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Passport Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->passport_number) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'passport_number', "$required", 'value' => "$value"]) }}
            @error('passport_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Passport Expiry Date';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->passport_expiry_date) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->class('form-control form-control-sm')->attributes(['name' => 'passport_expiry_date', "$required", 'value' => "$value"]) }}
            @error('passprot_expiry_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Passport Photo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'passport_photo']) }}
            @error('passport_photo')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'SSN';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->ssn) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'ssn', "$required", 'value' => "$value"]) }}
            @error('ssn')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'ID CARD';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'id_card', 'value' => "$value"]) }}
            @error('id_card')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'University Degree';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->university_degree) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'university_degree', "$required", 'value' => "$value"]) }}
            @error('university_degree')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'About Team Member';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->about_team_member) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'about_team_member', "$required", 'value' => "$value"]) }}
            @error('about_team_member')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Position';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'top_management' => 'Top Management',
                'sales_manager' => 'Sales Manager',
                'sales_agent' => 'Sales Agent',
                'project_manager' => 'Project Manager',
            ];
            $value = ($team->position) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'position', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('position')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Type';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'master_admin' => 'Master Admin',
                'super_admin' => 'Super Admin',
                'admin' => 'Admin',
                'agent' => 'Agent',
            ];
            $value = ($team->type) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'type', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Upload Photo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'upload_photo', 'value' => "$value"]) }}
            @error('upload_photo')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Personal Cell Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->personal_cell_number) ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'personal_cell_number', "$required", 'value' => "$value"]) }}
            @error('personal_cell_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Personal Email ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->personal_email) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'personal_email', "$required", 'value' => "$value"]) }}
            @error('personal_email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Assigned Cell Number ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->assigned_cell_number) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'assigned_cell_number', "$required", 'value' => "$value"]) }}
            @error('assigned_cell_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Assigned Email ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->assigned_email) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'assigned_email', "$required", 'value' => "$value"]) }}
            @error('assigned_email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Home Address ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->home_address) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_address', "$required", 'value' => "$value"]) }}
            @error('home_address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Family Member Name ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->family_member_name) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'family_member_name', "$required", 'value' => "$value"]) }}
            @error('family_member_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Family Member Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->family_member_number) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'family_member_number', "$required", 'value' => "$value"]) }}
            @error('family_member_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Work Contract';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = ($team->work_contract) ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'work_contract', "$required", 'value' => "$value"]) }}
            @error('work_contract')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


    </div>
</div>
