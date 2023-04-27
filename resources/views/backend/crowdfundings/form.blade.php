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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "project_name", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "project_location", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "registered_company_name", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "company_tax_number", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Project Type';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "project_type", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Investment Duration';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "investment_duration", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "land_category", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "total_landCost", "type" => "number", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "accepted_currency", "$required"]) }}
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
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "real_state_value", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Total Cost of Investment';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "total_cost_of_investment", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Profit After Return of Investment is';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "profit_after_return_of_investment_is", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Share Price';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "share_price", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Deposit';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["name" => "deposit", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>
