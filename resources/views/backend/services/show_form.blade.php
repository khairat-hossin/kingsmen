<div class="mb-3">
    <legend class="border-bottom w-100">
        Add Services
    </legend>
    <div class="row">

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Solution Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->solution_title ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'solution_title',  'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Solution Image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->solution_image;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}  <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="solution_image" width="250" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Solution Summary';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->solution_summary ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'solution_summary',  'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'banner_text',  'readonly' => 'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->banner;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}  <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="banner" width="250" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->title ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'title',  'readonly' => 'true']) }}
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
