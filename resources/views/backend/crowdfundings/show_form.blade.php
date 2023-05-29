<div class="mb-3">
    <legend class="border-bottom w-100">Investment Short Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_name ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'project_name', 'value' => "$value"]) }}

        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->project_address ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes([ 'readonly' => true, 'name' => 'project_address', "$required"])->value($value) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Location';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_location ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'project_location', "$required", 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Registered Company Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->registered_company_name ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'registered_company_name', "$required", 'value' => "$value"]) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'company_tax_number', "$required", 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Type';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->project_type ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes([ 'readonly' => true, 'name' => 'project_type', "$required"])->placeholder($field_placeholder)->value($value) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->investment_duration ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes([ 'readonly' => true, 'name' => 'investment_duration', "$required"])->placeholder($field_placeholder)->value($value) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration In Years';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->investment_duration_in_years ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes([ 'readonly' => true, 'name' => 'investment_duration_in_years', "$required"])->placeholder($field_placeholder)->value($value) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Type of Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->type_of_investment ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'type_of_investment', "$required", 'id' => 'type_of_investment']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Accepted Currency';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->accepted_currency ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'accepted_currency', "$required"])->placeholder($field_placeholder)->value($value) }}
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
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'project_starting_date', "$required", 'id' => 'project_starting_date']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Delivery Date';
            $field_lable = label_case($field_name);
            $field_placeholder = 'mm/dd/yyyy';
            $value = $crowdfunding->project_delivery_date ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'project_delivery_date', "$required", 'id' => 'project_delivery_date']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'project_duration_in_years', 'id' => 'project_duration_in_years', "$required", 'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Real Estate/Land Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Category';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->land_category ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'land_category', "$required"])->placeholder($field_placeholder)->value($value) }}
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Area Per sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->land_area_per_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'land_area_per_sqm', "$required", 'id' => 'land_area_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'land_cost_per_sqm', "$required", 'id' => 'price_cost_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'total_land_cost', "$required", 'id' => 'total_land_cost', 'pattern' => '\d*', 'step' => 'any', 'readonly' => 'true']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">If Any Construction Available</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Available Construction Type';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->available_construction_type ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'available_construction_type', "$required"])->placeholder($field_placeholder)->value($value) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'built_up_area_size_per_sqm', "$required", 'id' => 'built_up_area_size_per_sqm', 'pattern' => '\d*']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'built_area_value_per_sqm', "$required", 'id' => 'built_area_value_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'total_built_up_area_value', "$required", 'id' => 'total_built_up_area_value', 'pattern' => '\d*', 'step' => 'any', 'readonly' => 'true']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Proposed Investment</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment in';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->investment_in ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'investment_in', "$required"])->placeholder($field_placeholder)->value($value) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'total_built_up_area_value', "$required", 'id' => 'total_built_up_area_value', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'total_number_of_investment_in', "$required", 'id' => 'total_number_of_investment_in', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'real_estate_value', "$required", 'id' => 'real_estate_value', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'proposed_additional_investment_cost', "$required", 'id' => 'proposed_additional_investment_cost', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_cost_of_investment', "$required", 'id' => 'total_cost_of_investment', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    <legend class="border-bottom w-100">Shares And Values</legend>
        <div class="row">
            <div class="form-group col-6 col-md-4 mb-2">
                <?php
                $field_name = 'Total registered Shares at Local Authoritise';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $value = $crowdfunding->total_registered_shares_at_local_authoritise ?? '';
                $required = '';
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'total_registered_shares_at_local_authoritise', "$required", 'pattern' => '\d*', 'step' => 'any']) }}
            </div>
            <div class="form-group col-6 col-md-4 mb-2">
                <?php
                $field_name = 'Shares Listed for Sale';
                $field_lable = label_case($field_name);
                $field_placeholder = $field_lable;
                $value = $crowdfunding->shares_listed_for_sale ?? '';
                $required = '';
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'shares_listed_for_sale', "$required", 'pattern' => '\d*', 'step' => 'any']) }}
            </div>            
        </div>       

    <legend class="border-bottom w-100">Return On Investment</legend>
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'project_duration_in_years', "$required", 'id' => 'project_duration_in_years', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'investment_break_even_expected_after_year', "$required", 'id' => 'investment_break_even_expected_after_year', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Profit After Return on investment is';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->profit_after_return_of_investment_is ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->value($value)->attributes([ 'readonly' => true, 'name' => 'profit_after_return_of_investment_is', "$required"]) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'expected_profit_after_break_even', "$required", 'id' => 'expected_profit_after_break_even', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'expected_profit_percent_after_break_even_as_per_study', "$required", 'id' => 'expected_profit_percent_after_break_even_as_per_study', 'pattern' => '\d*', 'step' => 'any', 'readonly' => 'true']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'one_shares_of_ownership_of_the_land_in_sqm', "$required", 'id' => 'one_shares_of_ownership_of_the_land_in_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'one_shares_of_ownership_of_the_land_in_sqm', "$required", 'id' => 'one_shares_of_ownership_of_the_land_in_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'one_shares_of_ownership_in_number_of_investing_in', "$required", 'id' => 'one_shares_of_ownership_in_number_of_investing_in', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'share_price', "$required", 'id' => 'share_price', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'deposit', "$required", 'id' => 'deposit', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'remaining_amount_as_bank_transfer', "$required", 'id' => 'remaining_amount_as_bank_transfer', 'pattern' => '\d*', 'step' => 'any']) }}
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'full_payment_in_USDT_bLockchain', "$required", 'id' => 'full_payment_in_USDT_bLockchain', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Upload Legal Document And Contracts </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Selling Contract';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            <br>
            @if ($crowdfunding->selling_contract)
                <a href="{{ asset( str_replace('\\', '/', $crowdfunding->selling_contract)) }}"></a>
            @endif
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Company Papers';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            <br>
            @if ($crowdfunding->company_papers)
                <a href="{{ asset($crowdfunding->company_papers) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
            @endif
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Busiuness Plan';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            @if ($crowdfunding->buisness_plan)
                <a href="{{ asset($crowdfunding->buisness_plan) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
            @endif
        </div>
    </div>

    <legend class="border-bottom w-100">Website Project Cover and Social Media Share</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Logo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            @if ($crowdfunding->project_logo)
                <img src="http://localhost:8000/{{ str_replace('\\', '/', $crowdfunding->project_logo) }}" alt="project_logo" width="170" height="100">
            @endif
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
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'crowfund_thumbnail', "$required"]) }}
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
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'title', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->description;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'description']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Website Template and Description </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Template';
            $field_lable = label_case($field_name);
            $field_placeholder = '';
            $value = $crowdfunding->choose_template ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->value($value)->attributes([ 'readonly' => true, 'name' => 'choose_template']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->banner_text ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'banner_text', 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->title_1 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->value($value)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'title_1']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Paragraph 1 As Per Dessign';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->paragraph_1 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'paragraph_1']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->title_2 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'title_2']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Paragraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->paragraph_2 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes([ 'readonly' => true, 'name' => 'paragraph_2']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Timeline';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->project_timeline ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'project_timeline', 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Managment Companies';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $crowdfunding->management_companies ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes([ 'readonly' => true, 'name' => 'management_companies', 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            @if ($crowdfunding->banner)
                <img src="http://localhost:8000/{{ str_replace('\\', '/', $crowdfunding->banner) }}" alt="banner" width="250" height="100">
            @endif
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Photo Gallery';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            @php
                $data = $crowdfunding->photos_gallery;
                $data = json_decode($data, true);
            @endphp

            <div class="row">
                @if ($data)
                    @foreach ($data as $photo => $fileName)
                        <div class="col-3 col-sm-3 col-md-3">
                            <img src="{{ asset($fileName) }}" alt="photos_gallery" width="250" height="100">
                        </div>
                    @endforeach
                @endif
            </div>

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
        background-color: rgb(229, 231, 233) !important;
    }
</style>
