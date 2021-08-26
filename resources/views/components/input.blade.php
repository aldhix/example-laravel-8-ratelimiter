@props(['label','name','type'])
<div class="form-group">
    <label>{{ $label }}</label>
    <input
     type="{{ $type}}"
     name="{{ $name }}"
     class="form-control{{ $errors->has($name) ? ' is-invalid':'' }}">
     @error($name)
         <div class="invalid-feedback">{{ $message }}</div>
     @enderror
</div>
