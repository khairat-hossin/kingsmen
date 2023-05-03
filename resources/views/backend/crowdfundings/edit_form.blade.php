<div class="mb-3">
    <legend class="border-bottom w-100">Investment Short Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_name ?? '';
            $required = 'required';
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
            $value = $crowdfunding->project_address ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'project_address', "$required"])->options($options)->value($value) }}
            @error('project_address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Location';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_location ?? '';
            $required = 'required';
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
            $value = $crowdfunding->registered_company_name ?? '';
            $required = 'required';
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
            $value = $crowdfunding->company_tax_number ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'company_tax_number', "$required", 'value' => "$value"]) }}
            @error('company_tax_number')
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
            $value = $crowdfunding->project_type ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'project_type', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('project_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'short_term' => 'Short-term',
                'medium_term' => 'Medium-term',
                'long_term' => 'Long-term',
            ];
            $value = $crowdfunding->investment_duration ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'investment_duration', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('investment_duration')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration In Years';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'until_project_is_sold' => 'Until Project Is Sold',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
            ];
            $value = $crowdfunding->investment_duration_in_years ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'investment_duration_in_years', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('investment_duration_in_years')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Type of Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->type_of_investment ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'type_of_investment', "$required", 'id' => 'type_of_investment']) }}
            @error('type_of_investment')
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
            $value = $crowdfunding->accepted_currency ?? '';
            $required = 'required';
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
            $value = $crowdfunding->project_starting_date ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm datepicker')->value($value)->attributes(['name' => 'project_starting_date', "$required", 'id' => 'project_starting_date']) }}
            @error('project_starting_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Delivery Date';
            $field_lable = label_case($field_name);
            $field_placeholder = 'mm/dd/yyyy';
            $value = $crowdfunding->project_delivery_date ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm datepicker')->value($value)->attributes(['name' => 'project_delivery_date', "$required", 'id' => 'project_delivery_date']) }}
            @error('project_delivery_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_duration_in_years ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_duration_in_years', 'id' => 'project_duration_in_years', "$required", 'value' => "$value"]) }}
            @error('project_duration_in_years')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Real Estate/Land Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Category';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Residential' => 'Residential',
                'Commercial' => 'Commercial',
                'Agriculture' => 'Agriculture',
                'Industrial' => 'Industrial',
            ];
            $value = $crowdfunding->land_category ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_category', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('land_category')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Area Per sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->land_area_per_sqm ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'land_area_per_sqm', "$required", 'id' => 'land_area_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Cost Per sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->land_cost_per_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'land_cost_per_sqm', "$required", 'id' => 'price_cost_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Land Cost';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->total_land_cost ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_land_cost', "$required", 'id' => 'total_land_cost', 'pattern' => '\d*', 'step' => 'any', 'readonly' => 'true']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">If Any Construction Available</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Available Construction Type';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Building' => 'Building',
            ];
            $value = $crowdfunding->available_construction_type ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm')->attributes(['name' => 'available_construction_type', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('available_construction_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Built up Area Size /sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->built_up_area_size_per_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'built_up_area_size_per_sqm', "$required", 'id' => 'built_up_area_size_per_sqm', 'pattern' => '\d*']) }}
            @error('built_up_area_size_per_sqm')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Built Area Value /sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->built_area_value_per_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'built_area_value_per_sqm', "$required", 'id' => 'built_area_value_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Built Up Area Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->total_built_up_area_value ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_built_up_area_value', "$required", 'id' => 'total_built_up_area_value', 'pattern' => '\d*', 'step' => 'any', 'readonly' => 'true']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Proposed Investment</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment in';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'walnut_trees' => 'Walnut trees',
                'lands_for_sale' => 'Lands For Sale',
                'hotel_rooms' => 'Hotel Rooms ',
                'apartments' => 'Apartments ',
            ];
            $value = $crowdfunding->investment_in ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm')->attributes(['name' => 'investment_in', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('investment_in')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Built up Area Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->total_built_up_area_value ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_built_up_area_value', "$required", 'id' => 'total_built_up_area_value', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Number Of ( Investing in )';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->total_number_of_investment_in ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_number_of_investment_in', "$required", 'id' => 'total_number_of_investment_in', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Investment Cost</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Real Estate Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->real_estate_value ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'real_estate_value', "$required", 'id' => 'real_estate_value', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Proposed additional Investment Cost ( As per Study )';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->proposed_additional_investment_cost ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'proposed_additional_investment_cost', "$required", 'id' => 'proposed_additional_investment_cost', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Cost of Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->total_cost_of_investment ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_cost_of_investment', "$required", 'id' => 'total_cost_of_investment', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Investment Cost</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_duration_in_years ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'project_duration_in_years', "$required", 'id' => 'project_duration_in_years', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Break Even Expected After year';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->investment_break_even_expected_after_year ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'investment_break_even_expected_after_year', "$required", 'id' => 'investment_break_even_expected_after_year', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Profit After Return on investment is';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Monthly' => 'Monthly',
                'Quartertly' => 'Quartertly',
                'Yearly' => 'Yearly',
            ];
            $value = $crowdfunding->profit_after_return_on_investment_is ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->value($value)->attributes(['name' => 'profit_after_return_on_investment_is', "$required"])->options($options) }}
            @error('profit_after_return_on_investment_is')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Expected Profit After Break Even ( As Per Study)';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->expected_profit_after_break_even ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'expected_profit_after_break_even', "$required", 'id' => 'expected_profit_after_break_even', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Expected Profit % After Break Even( As Per Study) ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->expected_profit_percent_after_break_even_as_per_study ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'expected_profit_percent_after_break_even_as_per_study', "$required", 'id' => 'expected_profit_percent_after_break_even_as_per_study', 'pattern' => '\d*', 'step' => 'any', 'readonly' => 'true']) }}
        </div>
    </div>
        <legend class="border-bottom w-100">1 Share's value in assets</legend>
        <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = '1 Share\'s Ownership of The Land in sqm ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->one_shares_of_ownership_of_the_land_in_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'one_shares_of_ownership_of_the_land_in_sqm', "$required", 'id' => 'one_shares_of_ownership_of_the_land_in_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = '1 Share\'s Ownership of The Construction in sqm ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->one_shares_of_ownership_of_the_land_in_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'one_shares_of_ownership_of_the_land_in_sqm', "$required", 'id' => 'one_shares_of_ownership_of_the_land_in_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = '1 Share\'s ownership in number of (Investing in)  ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->one_shares_of_ownership_in_number_of_investing_in ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'one_shares_of_ownership_in_number_of_investing_in', "$required", 'id' => 'one_shares_of_ownership_in_number_of_investing_in', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Price of 1 Share</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Share Price';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->share_price ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'share_price', "$required", 'id' => 'share_price', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Payment Method</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Deposit';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->deposit ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'deposit', "$required", 'id' => 'deposit', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Remaining Amount As bank Transfer';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->remaining_amount_as_bank_transfer ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'remaining_amount_as_bank_transfer', "$required", 'id' => 'remaining_amount_as_bank_transfer', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Full Payment in USDT Via BLockchain';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->full_payment_in_USDT_bLockchain ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'full_payment_in_USDT_bLockchain', "$required", 'id' => 'full_payment_in_USDT_bLockchain', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Upload Legal Document And Contracts </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add  Selling Contract';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'selling_contract', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Company Papers';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'company_papers', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Project Rules And Regulations';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'project_rules_and_regulation', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Other Files';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'other_files', "$required"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Website Project Cover and Social Media Share</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Logo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_logo', 'value' => "$value"]) }}
            @error('project_logo')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Crowfund Thumbnail';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->crowfund_thumbnail;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'crowfund_thumbnail', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->title;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'title', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->description;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'description']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Website Template and Description </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Choose Template';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'Template 1' => 'Template 1',
                'Template 2' => 'Template 2',
                'Template 3' => 'Template 3',
                'Template 4' => 'Template 4',
            ];
            $value = $crowdfunding->choose_template ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->value($value)->attributes(['name' => 'choose_template'])->options($options) }}
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->banner_text ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->title_1 ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', 'value' => "$value"]) }}
            @error('title_1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Paragraph 1 As Per Dessign';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->paragraph_1 ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', 'value' => "$value"]) }}
            @error('paragraph_1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->title_2 ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', 'value' => "$value"]) }}
            @error('title_2')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Paragraph 2 As Per Dessign';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->paragraph_2 ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', 'value' => "$value"]) }}
            @error('paragraph_2')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Photos to Gallery';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'photos_gallery']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Project Timeline';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_timeline ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_timeline', 'value' => "$value"]) }}
            @error('project_timeline')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Managment Companies';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->management_companies ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'management_companies', 'value' => "$value"]) }}
            @error('management_companies')
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
                calculateLandPriceStarting(area_starting_per_sqm, price_starting_per_sqm);
            }
        });

        $('#price_starting_per_sqm').on("change", function() {
            let area_starting_per_sqm = $("#area_starting_per_sqm").val();
            let price_starting_per_sqm = $("#price_starting_per_sqm").val();

            if (area_starting_per_sqm && price_starting_per_sqm) {
                calculateLandPriceStarting(area_starting_per_sqm, price_starting_per_sqm);
            }
        });

        function calculateLandPriceStarting(area, price) {
            let landPriceStarting = parseFloat(area) * parseFloat(price);
            $("#land_price_starting").val(landPriceStarting);
        }
    </script>
@endpush
