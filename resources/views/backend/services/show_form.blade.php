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
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'solution_title', "$required", 'readonly' => 'true']) }}
            @error('solution_title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Solution Image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->solution_image;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!} <br>
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
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'solution_summary', "$required", 'readonly' => 'true']) }}
            @error('solution_summary')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner Text';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->banner_text ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }}
            {{ html()->text($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'banner_text', "$required", 'readonly' => 'true']) }}
            @error('banner_text')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Banner';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->banner;
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!} <br>
            <img src="http://localhost:8000/{{ str_replace('\\', '/', $value) }}" alt="banner" width="250" height="100">            
        </div>

        <div class="form-group col-6 col-md-4 mb-2">
            <?php
            $field_name = 'Title';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $value = $service->title ?? '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->class('form-control form-control-sm')->value($value)->attributes(['name' => 'title', "$required", 'readonly' => 'true']) }}
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
