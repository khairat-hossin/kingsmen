<div class="mb-3">
    <legend class="border-bottom w-100">
        Show About Us
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Question';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $about_us->question ?? '';
            ?>
            <input type="hidden" id="about_us_id" name="about_us_id" value="{{ $about_us->id }}">
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'question',  'readonly'=>'true']) }}
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Answer';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $about_us->answer ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'answer',  'readonly'=>'true']) }}
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $about_us->banner;
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}  <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="banner" width="250" height="100">

        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $about_us->banner_text ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'banner_text',  'readonly'=>'true']) }}
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
