<div class="form-group">
    <label for="options">{{ $label }}</label>   

    <select class="form-control" id="{{ $name }}" name="{{ $name }}">
    @foreach($options as $key => $value)
        @if ($key == $selectval)
            <option value={{$key}} selected>{{ $value }}</option>
        @else
            <option value={{$key}}>{{ $value }}</option>
        @endif
    @endforeach    
    </select>
    @error("{{ $name }}")
        <span class="text-sm text-danger">{{ $message }}</span>
    @enderror
</div>