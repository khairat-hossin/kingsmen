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
            $value = old('project_address') ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name)->class('form-control form-control-sm select2')->attributes(['name' => 'project_address', "$required"])->options($options)->placeholder($field_placeholder)->value($value) }}
            @error('project_address')
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

    {{-- 
    <legend class="border-bottom w-100">Project Timeline</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Starting Date';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'starting_date', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Delivery Date';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'delivery_date', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_duration_in_years', "$required"]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Land Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Area Starting/Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'area_starting_per_sqm', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Price Starting/Sqm';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'price_starting_per_sqm', "$required"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Price Starting';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'land_price_starting', "$required"]) }}
        </div>

    </div>


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


    <legend class="border-bottom w-100">Home Page ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Photos to Galary';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'photos_gallery', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Project Timline';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'project_timeline', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Add Managment Companies';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'management_companies', "$required"]) }}
        </div>

    </div>
    

    <legend class="border-bottom w-100">Questions And Answers ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Buy Your Home( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Amenities ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>
    

    <legend class="border-bottom w-100">Add Financing ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>
    

    <legend class="border-bottom w-100">Add Who We Are ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>
    
    

    <legend class="border-bottom w-100">Add Contact Us ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>
    
    
    <legend class="border-bottom w-100">Add Information in Footer ( To Be Filled As Per Design )</legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'banner_text', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 1 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 1 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_1', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title 2 As per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'title_2', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Pharagraph 2 As Per Design';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['name' => 'paragraph_2', "$required"]) }}
        </div>
    </div>
    

    <legend class="border-bottom w-100">Downloads ( To Be FilledAs Per Design ) </legend>
    <div class="row">
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Brochure';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'project_brochure', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Elevations';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'project_elevations', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Construction Rules';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'construction_rules', "$required"]) }}
        </div>
        
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Other';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->multiple()->class('form-control form-control-sm')->attributes(['name' => 'other', "$required"]) }}
        </div>
    </div> --}}

</div>
