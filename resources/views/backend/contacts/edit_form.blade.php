<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'First Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($contact->first_name)->class('form-control')->attributes(["name" => "first_name", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'Last Name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($contact->last_name)->class('form-control')->attributes(["name" => "last_name", "$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-6 col-md-5">
        <div class="form-group">
            <?php
            $field_name = 'Email';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($contact->email)->class('form-control')->attributes(["name" => "email", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'Phone';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($contact->phone)->class('form-control')->attributes(["name" => "phone", "type" => "number", "$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-7">
        <div class="form-group">
            <?php
            $field_name = 'ID NO';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->value($contact->id_no)->class('form-control')->attributes(["name" => "id_no", "type" => "number", "$required"]) }}
        </div>
    </div>
</div>




