<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Project Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->project_name)->class('form-control')->attributes(["name" => "project_name", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Project Location';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->project_location)->class('form-control')->attributes(["name" => "project_location", "$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Registered Company Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->registered_company_name)->class('form-control')->attributes(["name" => "registered_company_name", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Company Tax Number';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->company_tax_number)->class('form-control')->attributes(["name" => "company_tax_number", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>






<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Project Type';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->project_type)->class('form-control')->attributes(["name" => "project_type", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Investment Duration';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->investment_duration)->class('form-control')->attributes(["name" => "investment_duration", "$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Land Category';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->land_category)->class('form-control')->attributes(["name" => "land_category", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Total Land Cost';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->total_landCost)->class('form-control')->attributes(["name" => "total_landCost", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>


<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Accepted Currency';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->accepted_currency)->class('form-control')->attributes(["name" => "accepted_currency", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Realstate Value';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($crowdfunding->real_state_value)->class('form-control')->attributes(["name" => "real_state_value", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>
