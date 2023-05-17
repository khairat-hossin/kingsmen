<div class="mb-3">
    <legend class="border-bottom w-100">
        Add Team Member
    </legend>
    <div class="row">
        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Question';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $about_us->question ?? '';
            $required = 'required';
            ?>
            <input type="hidden" id="about_us_id" name="about_us_id" value="{{ $about_us->id }}">
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
            $value = $about_us->answer ?? '';
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
            $value = $about_us->banner;
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
            $value = $about_us->banner_text ?? '';
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
            $field_label = label_case($field_name);
            $field_placeholder = $field_label;
            $value = $about_us->video;
            $required = '';
            ?>
            {{ html()->label($field_label, $field_name)->class('form-label') }}           
            <video width="320" height="240" controls>
                <source src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" type="video/mp4">
            </video>
        </div>
    </div>
</div>
