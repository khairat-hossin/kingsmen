<div class="mb-3">
    <legend class="border-bottom w-100">Investment Short Description
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->project_name ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'project_name', "$required", 'value' => "$value"]) }}
            @error('project_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->project_address ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'project_address', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('project_address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Location';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->project_location ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'project_location', "$required", 'value' => "$value"]) }}
            @error('project_location')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Registered Company Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->registered_company_name ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'registered_company_name', "$required", 'value' => "$value"]) }}
            @error('registered_company_name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Company Tax Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->company_tax_number ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'company_tax_number', "$required", 'value' => "$value"]) }}
            @error('company_tax_number')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Type';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->project_type ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'project_type', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('project_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->investment_duration ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'investment_duration', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('investment_duration')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration In Years';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->investment_duration_in_years ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'investment_duration_in_years', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('investment_duration_in_years')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Type of Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->type_of_investment ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'type_of_investment', "$required", 'value' => "$value"]) }}
            @error('type_of_investment')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Accepted Currency';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->accepted_currency ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'accepted_currency', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('accepted_currency')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Investment Duration</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Duration in Years';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->investment_duration_in_years ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'investment_duration_in_years_2', "$required", 'value' => "$value"]) }}
            @error('investment_duration_in_years')
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

            $value = $private_investment->land_category ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'land_category', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('land_category')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Area in sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->land_area_in_sqm ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'land_area_in_sqm', "$required", 'id' => 'land_area_in_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Cost Per sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->land_cost_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'land_cost_per_sqm', "$required", 'id' => 'price_cost_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Land Cost';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->total_land_cost ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'total_land_cost', "$required", 'id' => 'total_land_cost', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">If Any Construction Available</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Available Construction Type';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->available_construction_type ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'available_construction_type', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('available_construction_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Built up Area Size /sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->built_up_area_size_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'built_up_area_size_per_sqm', "$required", 'id' => 'built_up_area_size_per_sqm', 'pattern' => '\d*']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Built Area Value /sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->built_up_area_value_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'built_up_area_value_per_sqm', "$required", 'id' => 'built_up_area_value_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Built up Area Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->total_built_up_area_value ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'total_built_up_area_value', "$required", 'id' => 'total_built_up_area_value', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Proposed Investment</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment in';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->investment_in ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'investment_in', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('investment_in')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Built up Area Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->total_built_up_area_value ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'total_built_up_area_value', "$required", 'id' => 'total_built_up_area_value', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Number Of ( Investing in )';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->total_number_of_investment_in ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'total_number_of_investment_in', "$required", 'id' => 'total_number_of_investment_in', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Investment Cost</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Real Estate Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->real_estate_value ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'real_estate_value', "$required", 'id' => 'real_estate_value', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Proposed additional Investment Cost ( As per Study )';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->proposed_additional_investment_cost ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'proposed_additional_investment_cost', "$required", 'id' => 'proposed_additional_investment_cost', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Cost of Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->total_cost_of_investment ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'total_cost_of_investment', "$required", 'id' => 'total_cost_of_investment', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Investment Cost</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years Before Generating Profit';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->project_duration_in_years_before_generating_profit ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'project_duration_in_years_before_generating_profit', "$required", 'id' => 'project_duration_in_years_before_generating_profit', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Investment Break Even Expected at year';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->investment_break_even_expected_at_year ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'investment_break_even_expected_at_year', "$required", 'id' => 'investment_break_even_expected_at_year', 'pattern' => '\d*', 'step' => 'any']) }}
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
            $value = $private_investment->profit_after_return_on_investment_is ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->value($value)->attributes(['readonly' => true, 'name' => 'profit_after_return_on_investment_is', "$required"])->placeholder($field_placeholder)->value($value) }}
            @error('profit_after_return_on_investment_is')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Expected Profit After Break Even ( As Per Study)';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->expected_profit_after_break_even ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'expected_profit_after_break_even', "$required", 'id' => 'expected_profit_after_break_even', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Expected Profit % After Break Even( As Per Study) ';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->expected_profit_percent_after_break_even_as_per_study ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'expected_profit_percent_after_break_even_as_per_study', "$required", 'id' => 'expected_profit_percent_after_break_even_as_per_study', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Payment Method</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Deposit';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->deposit ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'deposit', "$required", 'id' => 'deposit', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Remaining Amount As bank Transfer';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->remaining_amount_as_bank_transfer ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->number($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'remaining_amount_as_bank_transfer', "$required", 'id' => 'remaining_amount_as_bank_transfer', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Upload Legal Document And Contracts </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Selling Contract';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <embed src="{{ asset( str_replace('\\', '/', $private_investment->selling_contract) ) }}" width="100%" height="260px" type="application/pdf">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Company Papers';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <embed src="{{ asset( str_replace('\\', '/', $private_investment->company_papers) ) }}" alt="company_papers" width="100%" height="260px" type="application/pdf">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Rules And Regulations';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <embed src="{{ asset( str_replace('\\', '/', $private_investment->project_rules_and_regulation) ) }}" alt="project_rules_and_regulations" width="100%" height="260px" type="application/pdf">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Other Files';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <embed src="{{ asset( str_replace('\\', '/', $private_investment->other_files) ) }}" alt="other_files" width="100%" height="260px" type="application/pdf">
        </div>
    </div>

    <legend class="border-bottom w-100">Website Project Cover and Social Media Share</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Crowdfund Thumbnail';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'crowfund_thumbnail', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'title', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'description', "$required"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Website Template and Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Choose Template';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';

            $value = $private_investment->choose_template ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'choose_template', "$required"])->placeholder($field_placeholder)->value($value) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->banner_text ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'banner_text',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->title_1 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'title_1', 'value' => "$value"]) }}
            @error('title_1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Paragraph 1 As Per Dessign';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->paragraph_1 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'paragraph_1', 'value' => "$value"]) }}
            @error('paragraph_1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->title_2 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'title_2', 'value' => "$value"]) }}
            @error('title_2')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Paragraph 2 As Per Dessign';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $private_investment->paragraph_2 ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'paragraph_2', 'value' => "$value"]) }}
            @error('paragraph_2')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $private_investment->banner) }}" alt="banner" width="170" height="100">
        </div>
    </div>

    <div class="form-group col-6 col-md-4 mb-2">
        <?php
            $field_name = 'Photos Gallery';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }}
            @php
             $data = $private_investment->photo_gallery;
             $photos = json_decode($data, true);
            @endphp
            @foreach ($photos as  $photo  => $fileName)
                <img src="{{ str_replace('\\', '/', $fileName) }}" alt="photo_gallery" width="170" height="100">
            @endforeach
        </div>
    </div>
</div>
