<fieldset {{ $attributes->merge(['class' => 'dynamic-fieldset']) }} data-min="{{ $min }}" data-max="{{ $max }}">

    <legend>{{ $legend }}</legend>

    <div class="dynamic-list">

      {!! $slot !!}

    </div>

    <div class="d-flex align-items-end">
        @if($help)
          <small class="form-text text-muted">{{ $help }}</small>
        @endif

        @if($isActive)
          <button type="button" class="ml-auto btn dynamic-add {{ $btnAdd['class'] ?? 'btn-primary' }}" aria-label="{{ $btnAdd['label'] ?? 'Add' }}">{!! $btnAdd['value'] ?? 'Add' !!}</button>
        @endif
    </div>

    <script type="text/template" data-template="dynamic-template">

      <div class="d-flex align-items-center dynamic-item">

        {!! $template !!}

        @if($isActive)
          <div class="dynamic-item-btn">
            <button type="button" class="btn dynamic-remove {{ $btnRemove['class'] ?? 'btn-danger' }}" aria-label="{{ $btnRemove['label'] ?? 'Remove' }}">{!! $btnRemove['value'] ?? 'Remove' !!}</button>
          </div>
        @endif

      </div>

    </script>

</fieldset>
