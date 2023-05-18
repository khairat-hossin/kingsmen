<div class="mb-3">
    <legend class="border-bottom w-100">
        Show FAQs
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Question';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $faq->question ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'question', "$required", 'readonly'=>'true']) }}
            @error('question')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Answer';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $faq->answer ?? '';
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'answer', "$required", 'readonly'=>'true']) }}
            @error('answer')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $faq->banner;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!} <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="banner" width="250" height="100">
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $faq->banner_text ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'banner_text', "$required", 'readonly'=>'true']) }}
            @error('banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Video';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $faq->video;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!} <br>
            <video width="320" height="200" controls>
                <source src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" type="video/mp4">
            </video>
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
