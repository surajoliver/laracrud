<div class="form-group">
    <label for=$name>{{ $label }}</label>
    <div class="">
    <input {{ $attributes->merge(['class'=>'form-control']) }}  id={{ $name }} name={{ $name }} {{ $checked ? 'checked': ''}} />
    </div>
    @error($name)
        <span class="text-sm text-danger">{{ $message }}</span>
    @enderror
</div>