<input
  type="text"
  name="{{ $name }}"
  value="{{ old($cleanName,$value) }}"
  class="form-control date-picker {{ !empty($size) ? 'form-control-'.$size : '' }} @error($cleanName,$errorBag) is-invalid @enderror @if($errorRelated) @error($errorRelated,$errorBag) is-invalid @enderror @endif"
  id="{{ $cleanName.'Field' }}"
  @if($placeholder) placeholder="{{ $placeholder }}" @endif
  @if($help) aria-describedby="{{ $cleanName.'FieldHelp' }}" @endif
  {{ $isReadonly ? 'readonly' : '' }}
  {{ $isDisabled ? 'disabled' : ''}}
  {{ $isRequired ? 'required' : ''}}
  data-mode="{{ $mode }}"
  data-format="{{ $format }}"
  data-min-date="{{ $min }}"
  data-max-date="{{ $max }}"
  data-min-date-input="{{ $minInput }}"
  data-max-date-input="{{ $maxInput }}"
/>

<button class="btn btn-clear" aria-label="@lang('bs-component::button.clear')">
  <span aria-hidden="true">&times;</span>
</button>
