<div class="mb-3">
    <legend class="border-bottom w-100">Investment Short Description
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Logo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_logo', "$required", 'value' => "$value"]) }}
            @error('project_logo')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->project_name ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_name', "$required", 'value' => "$value"]) }}
            @error('project_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Country' => 'Country',
                'Region' => 'Region',
                'City' => 'City',
                'Village' => 'Village',
            ];
            $value = $project->address ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'address', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Location';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->project_location ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_location', "$required", 'value' => "$value"]) }}
            @error('project_location')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Registered Company Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->registered_company_name ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'registered_company_name', "$required", 'value' => "$value"]) }}
            @error('registered_company_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Company Tax Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->comapany_tax_number ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'comapany_tax_number', "$required", 'value' => "$value"]) }}
            @error('comapany_tax_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Type';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Agriculture' => 'Agriculture',
                'Residential' => 'Residential',
                'Indurstrial' => 'Indurstrial',
                'Commercial' => 'Commercial',
            ];
            $value = $project->project_type ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'project_type', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('project_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Accepted Currency';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'USD' => 'USD',
                'EURO' => 'EURO',
                'AMD' => 'AMD',
            ];
            $value = $project->accepted_currency ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm')->attributes(['name' => 'accepted_currency', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('accepted_currency')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <legend class="border-bottom w-100">Project Timeline</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Starting Date';
            $field_lable = label_case($field_name);
            $field_placeholder = 'mm/dd/yyyy';
            $value = $project->starting_date ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm datepicker')->value($value)->attributes(['name' => 'starting_date', "$required", 'id' => 'starting_date'])->placeholder($field_placeholder) }}
            @error('starting_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Delivery Date';
            $field_lable = label_case($field_name);
            $field_placeholder = 'mm/dd/yyyy';
            $value = $project->delivery_date ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm datepicker')->value($value)->attributes(['name' => 'delivery_date', "$required", 'id' => 'delivery_date'])->placeholder($field_placeholder) }}
            @error('delivery_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->project_duration_in_years ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'project_duration_in_years', "$required", 'id' => 'project_duration_in_years', 'readonly' => true]) }}
            @error('project_duration_in_years')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <legend class="border-bottom w-100">Land Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Area Starting/Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->area_starting_per_sqm ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'area_starting_per_sqm', "$required", 'id' => 'area_starting_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
            @error('area_starting_per_sqm')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Price Starting/Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->price_starting_per_sqm ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'price_starting_per_sqm', "$required", 'id' => 'price_starting_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
            @error('price_starting_per_sqm')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Price Starting';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->land_price_starting ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'land_price_starting', "$required", 'id' => 'land_price_starting', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
            @error('land_price_starting')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

    </div>


    <legend class="border-bottom w-100">Add Land</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_number');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->land_number ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_number', "$required", 'value' => "$value"]) }}
            @error('land_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_category');
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Agriculture' => 'Agriculture',
                'Residential' => 'Residential',
                'Indurstrial' => 'Indurstrial',
                'Commercial' => 'Commercial',
            ];
            $value = $project->land_category ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'land_category', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('land_category')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_area');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->land_area ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_area', "$required", 'id' => 'land_area', 'pattern' => '\d*', 'step' => 'any']) }}
            @error('land_area')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_price_per_sqm');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->land_price_per_sqm ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_price_per_sqm', "$required", 'id' => 'land_price_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
            @error('land_price_per_sqm')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('total_land_price');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->total_land_price ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'total_land_price', "$required", 'id' => 'total_land_price', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
            @error('total_land_price')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('all_listings_land');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'all_listings_land', "$required", 'value' => "$value"]) }}
            @error('all_listings_land')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('interactive_map');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->interactive_map ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'interactive_map', "$required", 'value' => "$value"]) }}
            @error('interactive_map')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


    </div>


    <legend class="border-bottom w-100">Add House</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('house_type');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->house_type ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'house_type', "$required", 'value' => "$value"]) }}
            @error('house_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('house_area_per_sqm');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->house_area_per_sqm ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'house_area_per_sqm', "$required", 'id' => 'house_area_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('cost_of_construction_per_sqm');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->cost_of_construction_per_sqm ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'cost_of_construction_per_sqm', "$required", 'id' => 'cost_of_construction_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('all_listings_house');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'all_listings_house', "$required", 'value' => "$value"]) }}
            @error('all_listings_house')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('technical_specs');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'technical_specs', "$required", 'value' => "$value"]) }}
            @error('technical_specs')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('total_construction_cost');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->total_construction_cost ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'total_construction_cost', "$required", 'id' => 'total_construction_cost', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Payment Method</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('total_price_with_land');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->total_price_with_land ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'total_price_with_land', "$required", 'id' => 'total_price_with_land', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
            @error('total_price_with_land')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('deposit');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->deposit ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'deposit', "$required", 'id' => 'deposit', 'pattern' => '\d*', 'step' => 'any']) }}
            @error('deposit')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('remainingAmount_as_bankTransfer');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->remainingAmount_as_bankTransfer ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'remainingAmount_as_bankTransfer', "$required", 'id' => 'remainingAmount_as_bankTransfer', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
            @error('remainingAmount_as_bankTransfer')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('full_payment_usdt');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->full_payment_usdt ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'full_payment_usdt', "$required", 'id' => 'full_payment_usdt', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
            @error('full_payment_usdt')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <legend class="border-bottom w-100">Upload Legal Document And Contracts </legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('selling_contract');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'selling_contract[]', "$required", 'value' => "$value"])->multiple() }}
            @error('selling_contract')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('company_papers');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'company_papers[]', "$required", 'value' => "$value"])->multiple() }}
            @error('company_papers')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('project_rules_and_regulation');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_rules_and_regulation[]', "$required", 'value' => "$value"])->multiple() }}
            @error('project_rules_and_regulation')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('other_files');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'other_files[]', "$required", 'value' => "$value"])->multiple() }}
            @error('other_files')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Website Project Cover and Social Media Share</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('project_thumbnail');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->project_thumbnail ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_thumbnail', "$required", 'value' => "$value"]) }}
            @error('project_thumbnail')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>



        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('title');
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Country' => 'Country',
                'Region' => 'Region',
                'City' => 'City',
                'Village' => 'Village',
            ];
            $value = $project->title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'title', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>



        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('description');
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->description ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'description', "$required", 'value' => "$value"]) }}
            @error('description')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


    </div>


    <legend class="border-bottom w-100">Website Data</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('template');
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Template 1' => 'Template 1',
                'Template 2' => 'Template 2',
                'Template 3' => 'Template 3',
            ];
            $value = $project->template ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'template', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('template')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <legend class="border-bottom w-100">Home Page</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_banner', "$required", 'value' => "$value"]) }}
            @error('home_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->home_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('home_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->home_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'home_page_header_title', "$required", 'value' => "$value"]) }}
            @error('home_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->home_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'home_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('home_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->home_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('home_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->home_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'home_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('home_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Photos to Gallery';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_photos_gallery[]', "$required", 'value' => "$value"])->multiple() }}
            @error('home_page_photos_gallery')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Project Timline';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->project_timeline ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_timeline', "$required", 'value' => "$value"]) }}
            @error('project_timeline')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Managment Companies';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Company Name 1' => 'Company Name 1',
                'Company Name 2' => 'Company Name 2',
                'Company Name 3' => 'Company Name 3',
                'Company Name 4' => 'Company Name 4',
            ];
            $value = $project->project_management_companies ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'project_management_companies', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('project_management_companies')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

    </div>


    <legend class="border-bottom w-100">Questions And Answers</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_banner', "$required", 'value' => "$value"]) }}
            @error('qna_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->qna_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('qna_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->qna_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_header_title', "$required", 'value' => "$value"]) }}
            @error('qna_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->qna_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'qna_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('qna_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->qna_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('qna_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->qna_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'qna_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('qna_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Buy Your Home( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_home_page_banner', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_home_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_home_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_home_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'buy_home_page_header_title', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_home_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->value($value)->attributes(['name' => 'buy_home_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_home_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_home_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_home_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'buy_home_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Buy Your Land( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_land_page_banner', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_land_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_land_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_land_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'buy_land_page_header_title', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_land_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'buy_land_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_land_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_land_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->buy_land_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'buy_land_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Amenities</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'amenities_page_banner', "$required", 'value' => "$value"]) }}
            @error('amenities_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->amenities_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'amenities_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('amenities_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->amenities_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'amenities_page_header_title', "$required", 'value' => "$value"]) }}
            @error('amenities_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->amenities_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'amenities_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('amenities_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->amenities_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'amenities_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('amenities_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->amenities_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'amenities_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('amenities_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <legend class="border-bottom w-100">Add Financing</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'financing_page_banner', "$required", 'value' => "$value"]) }}
            @error('financing_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->financing_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'financing_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('financing_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->financing_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'financing_page_header_title', "$required", 'value' => "$value"]) }}
            @error('financing_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->financing_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'financing_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('financing_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->financing_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'financing_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('financing_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->financing_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'financing_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('financing_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Add Who We Are</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'who_page_banner', "$required", 'value' => "$value"]) }}
            @error('who_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->who_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'who_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('who_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->who_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'who_page_header_title', "$required", 'value' => "$value"]) }}
            @error('who_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->who_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'who_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('who_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->who_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'who_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('who_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->who_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'who_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('who_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Add Contact Us</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'contact_page_banner', "$required", 'value' => "$value"]) }}
            @error('contact_page_banner')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->contact_page_banner_text ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'contact_page_banner_text', "$required", 'value' => "$value"]) }}
            @error('contact_page_banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->contact_page_header_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'contact_page_header_title', "$required", 'value' => "$value"]) }}
            @error('contact_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->contact_page_header_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'contact_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('contact_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->contact_page_footer_title ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'contact_page_footer_title', "$required", 'value' => "$value"]) }}
            @error('contact_page_footer_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->contact_page_footer_paragraph ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'contact_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('contact_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Add Information in Footer</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Kingsmen Details';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->kingsmen_details ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'kingsmen_details', "$required", 'value' => "$value"]) }}
            @error('kingsmen_details')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->project_address ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'project_address', "$required", 'value' => "$value"]) }}
            @error('project_address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Phone Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->phone_number ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'phone_number', "$required", 'value' => "$value", 'pattern' => '\d*']) }}
            @error('phone_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Email';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $project->email ?? '';
            // $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->email($field_name)->class('form-control form-control-sm')->attributes(['name' => 'email', "$required", 'value' => "$value"]) }}
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


    </div>


    <legend class="border-bottom w-100">Downloads ( To Be FilledAs Per Design ) </legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Brochure';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_brochure', "$required", 'value' => "$value"]) }}
            @error('project_brochure')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Elevations';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_elevations', "$required", 'value' => "$value"]) }}
            @error('project_elevations')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Construction Rules';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'construction_rules', "$required", 'value' => "$value"]) }}
            @error('construction_rules')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Other';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'other', "$required", 'value' => "$value"]) }}
            @error('other')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>

@push('after-scripts')
    <script>
        /**
         * on change start date or delivery date calculdate project duration in year
         */
        $('#starting_date').on("change", function() {
            let starting_date = $("#starting_date").val();
            let delivery_date = $("#delivery_date").val();

            if (starting_date && delivery_date) {
                starting_date = new Date(starting_date)
                delivery_date = new Date(delivery_date)
                let years = [];
                for (var i = starting_date.getFullYear(); i <= delivery_date.getFullYear(); i++) {
                    years.push(i);
                }
                $("#project_duration_in_years").val(years.length);
            }
        });
        $('#delivery_date').on("change", function() {
            let starting_date = $("#starting_date").val();
            let delivery_date = $("#delivery_date").val();

            if (starting_date && delivery_date) {
                starting_date = new Date(starting_date)
                delivery_date = new Date(delivery_date)
                let years = calculateYear(starting_date, delivery_date);
                $("#project_duration_in_years").val(years.length);
            }
        });

        // calculate years
        function calculateYear(from, to) {
            let years = [];
            for (var i = from.getFullYear(); i <= to.getFullYear(); i++) {
                years.push(i);
            }
            return years;
        }

        /**
         * on change area starting and price price starting change land price starting
         * land_price_starting= area_starting_per_sqm * price_starting_per_sqm
         */

        $('#area_starting_per_sqm').on("change", function() {
            let area_starting_per_sqm = $("#area_starting_per_sqm").val();
            let price_starting_per_sqm = $("#price_starting_per_sqm").val();

            if (area_starting_per_sqm && price_starting_per_sqm) {
                let landPriceStarting = calculateLandPriceStarting(area_starting_per_sqm, price_starting_per_sqm);
                $("#land_price_starting").val(landPriceStarting).change();
            }
        });

        $('#price_starting_per_sqm').on("change", function() {
            let area_starting_per_sqm = $("#area_starting_per_sqm").val();
            let price_starting_per_sqm = $("#price_starting_per_sqm").val();

            if (area_starting_per_sqm && price_starting_per_sqm) {
                let landPriceStarting = calculateLandPriceStarting(area_starting_per_sqm, price_starting_per_sqm);
                $("#land_price_starting").val(landPriceStarting).change();
            }
        });

        function calculateLandPriceStarting(area, price) {
            return parseFloat(area) * parseFloat(price);

        }

        /**
         * on change Land Area and Land Price Per Sqm, change Total Land Price
         * land_price_starting= area_starting_per_sqm * price_starting_per_sqm
         */

        $('#land_area').on("change", function() {
            let land_area = $("#land_area").val();
            let land_price_per_sqm = $("#land_price_per_sqm").val();

            if (land_area && land_price_per_sqm) {
                let total_land_price = calculateLandPriceStarting(land_area, land_price_per_sqm);
                $("#total_land_price").val(total_land_price).change();
            }
        });

        $('#land_price_per_sqm').on("change", function() {
            let land_area = $("#land_area").val();
            let land_price_per_sqm = $("#land_price_per_sqm").val();

            if (land_area && land_price_per_sqm) {
                let total_land_price = calculateLandPriceStarting(land_area, land_price_per_sqm);
                $("#total_land_price").val(total_land_price).change();
            }
        });

        /**
         * on change house_area_per_sqm and cost_of_construction_per_sqm, change Total Land Price
         * land_price_starting= area_starting_per_sqm * price_starting_per_sqm
         */

        $('#house_area_per_sqm').on("change", function() {
            let house_area_per_sqm = $("#house_area_per_sqm").val();
            let cost_of_construction_per_sqm = $("#cost_of_construction_per_sqm").val();

            if (house_area_per_sqm && cost_of_construction_per_sqm) {
                let total_construction_cost = calculateLandPriceStarting(house_area_per_sqm,
                    cost_of_construction_per_sqm);
                $("#total_construction_cost").val(total_construction_cost).change();
            }
        });

        $('#cost_of_construction_per_sqm').on("change", function() {
            let house_area_per_sqm = $("#house_area_per_sqm").val();
            let cost_of_construction_per_sqm = $("#cost_of_construction_per_sqm").val();

            if (house_area_per_sqm && cost_of_construction_per_sqm) {
                let total_construction_cost = calculateLandPriceStarting(house_area_per_sqm,
                    cost_of_construction_per_sqm);
                $("#total_construction_cost").val(total_construction_cost).change();
            }
        });

        // total cost

        $("#land_price_starting").on("change",function (e) {
            let land_price_starting= $("#land_price_starting").val();
            let total_land_price= $("#total_land_price").val();
            let total_construction_cost= $("#total_construction_cost").val();

            if(!land_price_starting) land_price_starting=0;
            if(!total_land_price) total_land_price=0;
            if(!total_construction_cost) total_construction_cost=0;
            let total= calculateTotalCost(land_price_starting, total_land_price, total_construction_cost);

            $("#total_price_with_land").val(total);
        });

        $("#total_land_price").on("change",function (e) {
            let land_price_starting= $("#land_price_starting").val();
            let total_land_price= $("#total_land_price").val();
            let total_construction_cost= $("#total_construction_cost").val();

            if(!land_price_starting) land_price_starting=0;
            if(!total_land_price) total_land_price=0;
            if(!total_construction_cost) total_construction_cost=0;
            let total= calculateTotalCost(land_price_starting, total_land_price, total_construction_cost);

            $("#total_price_with_land").val(total);
        });

        $("#total_construction_cost").on("change",function (e) {
            let land_price_starting= $("#land_price_starting").val();
            let total_land_price= $("#total_land_price").val();
            let total_construction_cost= $("#total_construction_cost").val();

            if(!land_price_starting) land_price_starting=0;
            if(!total_land_price) total_land_price=0;
            if(!total_construction_cost) total_construction_cost=0;
            let total= calculateTotalCost(land_price_starting, total_land_price, total_construction_cost);

            $("#total_price_with_land").val(total);
        });

        function calculateTotalCost(land_price_starting, total_land_price, total_construction_cost){
            return parseFloat(parseFloat(land_price_starting)+parseFloat(total_land_price)+parseFloat(total_construction_cost))
        }

        $("#deposit").on("change",function (e) {

            let total_price_with_land= $("#total_price_with_land").val();
            let deposit= $("#deposit").val();
            let total= parseFloat(parseFloat(total_price_with_land)- parseFloat(deposit));
            $("#remainingAmount_as_bankTransfer").val(total).change();
            let full_payment_usdt= convertToUSDT(total);
            $("#full_payment_usdt").val(full_payment_usdt).change();
        });

    </script>
@endpush
