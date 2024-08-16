<div class="form-group">
    <label for=$name>{{ $label }}</label>
    <textarea {{ $attributes->merge(['class'=>'form-control']) }}  id={{ $name }} name={{ $name }}>{{$slot}}</textarea>
    @error($name)
        <span class="text-sm text-danger">{{ $message }}</span>
    @enderror
</div>