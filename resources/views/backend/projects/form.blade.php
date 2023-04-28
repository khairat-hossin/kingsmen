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
            $required = 'required';
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
            $value = old('project_name') ?? '';
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
            $value = old('address') ?? '';
            $required = 'required';
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
            $value = old('project_location') ?? '';
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
            $value = old('registered_company_name') ?? '';
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
            $value = old('comapany_tax_number') ?? '';
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
            $value = old('project_type') ?? '';
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
            $field_name = 'Accepted Currency';
            $field_lable = label_case($field_name);
            $field_placeholder = 'Please Select';
            $options = [
                'USD' => 'USD',
                'EURO' => 'EURO',
                'AMD' => 'AMD',
            ];
            $value = old('accepted_currency') ?? '';
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
            $value = old('starting_date') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm datepicker')->attributes(['name' => 'starting_date', "$required", 'id' => 'starting_date'])->placeholder($field_placeholder) }}
            @error('accepted_currency')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Delivery Date';
            $field_lable = label_case($field_name);
            $field_placeholder = 'mm/dd/yyyy';
            $value = old('starting_date') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm datepicker')->attributes(['name' => 'delivery_date', "$required", 'id' => 'delivery_date'])->placeholder($field_placeholder) }}
            @error('delivery_date')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('project_duration_in_years') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_duration_in_years', "$required", 'id' => 'project_duration_in_years', 'readonly' => true]) }}
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
            $value = old('area_starting_per_sqm') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'area_starting_per_sqm', "$required", 'id' => 'area_starting_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Price Starting/Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('price_starting_per_sqm') ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'price_starting_per_sqm', "$required", 'id' => 'price_starting_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Price Starting';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('land_price_starting') ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_price_starting', "$required", 'id' => 'land_price_starting', 'pattern' => '\d*', 'step' => 'any', 'readonly' => true]) }}
        </div>

    </div>

    {{-- 
    <legend class="border-bottom w-100">Add Land</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_number', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Category';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_category', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Area';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_area', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Price Per Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_price_per_sqm', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Land Price';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'total_land_price', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Upload All Listings';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'all_listings', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Interactive Map';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'interactive_map', "$required"]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Add Houses</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'House Type';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'house_type', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'House Area/Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'houseArea_per_sqm', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Cost of Construction/ Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'costOfConstruction_per_sqm', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Upload All Listings';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'all_listings', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Technical Specs';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'technical_specs', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Construction Cost';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'total_construction_cost', "$required"]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Payment Method</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Total Price With Land';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'total_price_with_land', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Deposit';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'deposit', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Remaining Amount As bank Transfer';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'remainingAmount_as_bankTransfer', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Full Payment in USDT';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'full_payment_usdt', "$required"]) }}
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

--}}
    <legend class="border-bottom w-100">Home Page ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
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
            $value = old('home_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('home_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_header_title', "$required", 'value' => "$value"]) }}
            @error('home_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('home_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('home_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('home_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('home_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'home_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('home_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Photos to Galary';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
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
            $value = old('project_timeline') ?? '';
            $required = 'required';
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
            $value = old('project_management_companies') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'project_management_companies', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('project_management_companies')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

    </div>


    <legend class="border-bottom w-100">Questions And Answers ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
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
            $value = old('qna_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('qna_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_header_title', "$required", 'value' => "$value"]) }}
            @error('qna_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('qna_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('qna_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('qna_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('qna_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'qna_page_footer_paragraph', "$required", 'value' => "$value"]) }}
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
            $required = 'required';
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
            $value = old('buy_home_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('buy_home_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_home_page_header_title', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('buy_home_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_home_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_home_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('buy_home_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('buy_home_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_home_page_footer_paragraph', "$required", 'value' => "$value"]) }}
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
            $required = 'required';
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
            $value = old('buy_land_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('buy_land_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_land_page_header_title', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('buy_land_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_land_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('buy_land_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('buy_land_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'buy_land_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('buy_land_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Amenities ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
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
            $value = old('amenities_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('amenities_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'amenities_page_header_title', "$required", 'value' => "$value"]) }}
            @error('amenities_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('amenities_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'amenities_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('amenities_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('amenities_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('amenities_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'amenities_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('amenities_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <legend class="border-bottom w-100">Add Financing ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
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
            $value = old('financing_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('financing_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'financing_page_header_title', "$required", 'value' => "$value"]) }}
            @error('financing_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('financing_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'financing_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('financing_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('financing_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('financing_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'financing_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('financing_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Add Who We Are ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
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
            $value = old('who_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('who_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'who_page_header_title', "$required", 'value' => "$value"]) }}
            @error('who_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('who_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'who_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('who_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('who_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('who_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'who_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('who_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Add Contact Us ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
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
            $value = old('contact_page_banner_text') ?? '';
            $required = 'required';
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
            $value = old('contact_page_header_title') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'contact_page_header_title', "$required", 'value' => "$value"]) }}
            @error('contact_page_header_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('contact_page_header_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'contact_page_header_paragraph', "$required", 'value' => "$value"]) }}
            @error('contact_page_header_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('contact_page_footer_title') ?? '';
            $required = 'required';
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
            $value = old('contact_page_footer_paragraph') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'contact_page_footer_paragraph', "$required", 'value' => "$value"]) }}
            @error('contact_page_footer_paragraph')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <legend class="border-bottom w-100">Add Information in Footer ( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Kingsmen Details';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('kingsmen_details') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->attributes(['name' => 'kingsmen_details', "$required", 'value' => "$value"]) }}
            @error('kingsmen_details')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('project_address') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_address', "$required", 'value' => "$value"]) }}
            @error('project_address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Phone Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = old('phone_number') ?? '';
            $required = 'required';
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
            $value = old('email') ?? '';
            $required = 'required';
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
            $required = 'required';
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
            $required = 'required';
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
            $required = 'required';
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
