<div class="form-group">
    <label for="{{ $inputId }}" class="col-md-2 col-md-offset-2 control-label">{{ $inputLabel }}</label>
    <div class="col-md-4">
        <input id="{{ $inputId }}" type="text" name="{{ $inputName }}" class="form-control" value="{{ $oldValue }}">
    </div>
    <div class="col-md-4" style="padding-left: 0">
        @if($validationError)
            <span style="color: red;">{{ $validationError }}</span>
        @else
            <span style="color: red; font-size: 2em;">*</span>
        @endif
    </div>
</div>
