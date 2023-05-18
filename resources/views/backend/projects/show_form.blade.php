<div class="mb-3">
    <legend class="border-bottom w-100">Investment Short Description
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Logo';
            $field_lable = label_case($field_name);
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->project_logo) }}" alt="project_logo" width="170" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Name';
            $field_lable = label_case($field_name);
            $value = $project->project_name ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'project_name', 'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);

            $value = $project->address ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'address', ])->value($value) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Location';
            $field_lable = label_case($field_name);
            $value = $project->project_location ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'project_location',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Registered Company Name';
            $field_lable = label_case($field_name);
            $value = $project->registered_company_name ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'registered_company_name',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Company Tax Number';
            $field_lable = label_case($field_name);
            $value = $project->comapany_tax_number ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'comapany_tax_number',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Type';
            $field_lable = label_case($field_name);

            $value = $project->project_type ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'project_type', ])->value($value) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Accepted Currency';
            $field_lable = label_case($field_name);

            $value = $project->accepted_currency ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'accepted_currency', ])->value($value) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Project Timeline</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Starting Date';
            $field_lable = label_case($field_name);
            $value = $project->starting_date ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm ')->value($value)->attributes(['readonly' => true, 'name' => 'starting_date',  'id' => 'starting_date']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Delivery Date';
            $field_lable = label_case($field_name);
            $value = $project->delivery_date ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm ')->value($value)->attributes(['readonly' => true, 'name' => 'delivery_date',  'id' => 'delivery_date']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Duration in Years';
            $field_lable = label_case($field_name);
            $value = $project->project_duration_in_years ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'project_duration_in_years',  'id' => 'project_duration_in_years', ]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Land Description</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Area Starting/Sqm';
            $field_lable = label_case($field_name);
            $value = $project->area_starting_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'area_starting_per_sqm',  'id' => 'area_starting_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Price Starting/Sqm';
            $field_lable = label_case($field_name);
            $value = $project->price_starting_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'price_starting_per_sqm',  'id' => 'price_starting_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Land Price Starting';
            $field_lable = label_case($field_name);
            $value = $project->land_price_starting ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'land_price_starting',  'id' => 'land_price_starting', 'pattern' => '\d*', 'step' => 'any', ]) }}
        </div>

    </div>


    <legend class="border-bottom w-100">Land</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_number');
            $field_lable = label_case($field_name);
            $value = $project->land_number ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'land_number',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_category');
            $field_lable = label_case($field_name);

            $value = $project->land_category ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'land_category', ])->value($value) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_area');
            $field_lable = label_case($field_name);
            $value = $project->land_area ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'land_area',  'id' => 'land_area', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('land_price_per_sqm');
            $field_lable = label_case($field_name);
            $value = $project->land_price_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'land_price_per_sqm',  'id' => 'land_price_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('total_land_price');
            $field_lable = label_case($field_name);
            $value = $project->total_land_price ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'total_land_price',  'id' => 'total_land_price', 'pattern' => '\d*', 'step' => 'any', ]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('all_listings_land');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->all_listings_land) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('interactive_map');
            $field_lable = label_case($field_name);
            $value = $project->interactive_map ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'interactive_map',  'value' => "$value"]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">House</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('house_type');
            $field_lable = label_case($field_name);
            $value = $project->house_type ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'house_type',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('house_area_per_sqm');
            $field_lable = label_case($field_name);
            $value = $project->house_area_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'house_area_per_sqm',  'id' => 'house_area_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('cost_of_construction_per_sqm');
            $field_lable = label_case($field_name);
            $value = $project->cost_of_construction_per_sqm ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'cost_of_construction_per_sqm',  'id' => 'cost_of_construction_per_sqm', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('all_listings_house');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->all_listings_house) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('technical_specs');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->technical_specs) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('total_construction_cost');
            $field_lable = label_case($field_name);
            $value = $project->total_construction_cost ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'total_construction_cost',  'id' => 'total_construction_cost', 'pattern' => '\d*', 'step' => 'any', ]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Payment Method</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('total_price_with_land');
            $field_lable = label_case($field_name);
            $value = $project->total_price_with_land ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'total_price_with_land',  'id' => 'total_price_with_land', 'pattern' => '\d*', 'step' => 'any', ]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('deposit');
            $field_lable = label_case($field_name);
            $value = $project->deposit ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'deposit',  'id' => 'deposit', 'pattern' => '\d*', 'step' => 'any']) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('remainingAmount_as_bankTransfer');
            $field_lable = label_case($field_name);
            $value = $project->remainingAmount_as_bankTransfer ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'remainingAmount_as_bankTransfer',  'id' => 'remainingAmount_as_bankTransfer', 'pattern' => '\d*', 'step' => 'any', ]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('full_payment_usdt');
            $field_lable = label_case($field_name);
            $value = $project->full_payment_usdt ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'full_payment_usdt',  'id' => 'full_payment_usdt', 'pattern' => '\d*', 'step' => 'any', ]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Upload Legal Document And Contracts </legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('selling_contract');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->selling_contract) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('company_papers');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->company_papers) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('project_rules_and_regulation');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->project_rules_and_regulation) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('other_files');
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->other_files) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>
    </div>

    <legend class="border-bottom w-100">Website Project Cover and Social Media Share</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('project_thumbnail');
            $field_lable = label_case($field_name);
            $value = $project->project_thumbnail ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'project_thumbnail',  'value' => "$value"]) }}
        </div>



        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('title');
            $field_lable = label_case($field_name);

            $value = $project->title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'title', ])->value($value) }}
        </div>



        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('description');
            $field_lable = label_case($field_name);
            $value = $project->description ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'description',  'value' => "$value"]) }}
        </div>


    </div>


    <legend class="border-bottom w-100">Website Data</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = __('template');
            $field_lable = label_case($field_name);

            $value = $project->template ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'template', ])->value($value) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Home Page</legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->home_page_banner) }}" alt="home_page_banner" width="170" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->home_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'home_page_banner_text',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->home_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'home_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->home_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'home_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->home_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'home_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->home_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'home_page_footer_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Timline';
            $field_lable = label_case($field_name);
            $value = $project->project_timeline ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'project_timeline',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Managment Companies';
            $field_lable = label_case($field_name);

            $value = $project->project_management_companies ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm select2')->attributes(['readonly' => true, 'name' => 'project_management_companies', ])->value($value) }}
        </div>

        <div class="row">
            <div class="form-group col-6 col-md-4 mb-2">
                <?php
                $field_name = 'Photo Gallery';
                $field_lable = label_case($field_name);
                $value = '';
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }}
                @php
                    $data = $project->home_page_photos_gallery;
                    $photos = json_decode($data, true);
                @endphp
                <div class="row">
                    @foreach ($photos as  $photo  => $fileName)
                    <div class="col-4">
                        <img src="{{ str_replace('\\', '/', $fileName) }}" class="px-2" alt="home_page_photos_gallery" width="170" height="100">
                    </div>
                    @endforeach
            </div>
            </div>
        </div>

    </div>


    <legend class="border-bottom w-100">Questions And Answers</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->qna_page_banner) }}" alt="qna_page_banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->qna_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'qna_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->qna_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'qna_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->qna_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'qna_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->qna_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'qna_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->qna_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'qna_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Buy Your Home( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->buy_home_page_banner) }}" alt="banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->buy_home_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'buy_home_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->buy_home_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'buy_home_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->buy_home_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->value($value)->attributes(['readonly' => true, 'name' => 'buy_home_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->buy_home_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'buy_home_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->buy_home_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'buy_home_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Buy Your Land( To Be Filled As Per Design )</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->buy_land_page_banner) }}" alt="banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->buy_land_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'buy_land_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->buy_land_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'buy_land_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->buy_land_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'buy_land_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->buy_land_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'buy_land_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->buy_land_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'buy_land_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Amenities</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->amenities_page_banner) }}" alt="amenities_page_banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->amenities_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'amenities_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->amenities_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'amenities_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->amenities_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'amenities_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->amenities_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'amenities_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->amenities_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'amenities_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>


    <legend class="border-bottom w-100">Financing</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->financing_page_banner) }}" alt="banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->financing_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'financing_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->financing_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'financing_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->financing_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'financing_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->financing_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'financing_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->financing_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'financing_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Who We Are</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->who_page_banner) }}" alt="who_page_banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->who_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'who_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->who_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'who_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->who_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'who_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->who_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'who_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->who_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'who_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Contact Us</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $project->contact_page_banner) }}" alt="contact_page_banner" width="170" height="100">
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $value = $project->contact_page_banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'contact_page_banner_text',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Title';
            $field_lable = label_case($field_name);
            $value = $project->contact_page_header_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'contact_page_header_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Header Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->contact_page_header_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'contact_page_header_paragraph',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Title';
            $field_lable = label_case($field_name);
            $value = $project->contact_page_footer_title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'contact_page_footer_title',  'value' => "$value"]) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Footer Pharagraph';
            $field_lable = label_case($field_name);
            $value = $project->contact_page_footer_paragraph ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'contact_page_footer_paragraph',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Information in Footer</legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Kingsmen Details';
            $field_lable = label_case($field_name);
            $value = $project->kingsmen_details ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'kingsmen_details',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Address';
            $field_lable = label_case($field_name);
            $value = $project->project_address ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['readonly' => true, 'name' => 'project_address',  'value' => "$value"]) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Phone Number';
            $field_lable = label_case($field_name);
            $value = $project->phone_number ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'phone_number',  'value' => "$value", 'pattern' => '\d*']) }}
        </div>


        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Email';
            $field_lable = label_case($field_name);
            $value = $project->email ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->attributes(['readonly' => true, 'name' => 'email',  'value' => "$value"]) }}
        </div>
    </div>

    <legend class="border-bottom w-100">Downloads ( To Be FilledAs Per Design ) </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Brochure';
            $field_lable = label_case($field_name);
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->project_brochure) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Project Elevations';
            $field_lable = label_case($field_name);
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->project_elevations) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Construction Rules';
            $field_lable = label_case($field_name);
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->construction_rules) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Other';
            $field_lable = label_case($field_name);
            $value = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            <br>
            <a href="{{ asset($project->other) }}" target="_blank" class="btn btn-sm btn-success">Download</a>
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
