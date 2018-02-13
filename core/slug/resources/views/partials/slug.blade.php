@if (empty($object))
    <div class="form-group @if ($errors->has('slug')) has-error @endif">
        {!! Form::permalink('slug', old('slug'), 0, route('slug.create'), route($public_route, config('slug.pattern')), url('/')) !!}
        {!! Form::error('slug', $errors) !!}
    </div>
@else
    <div class="form-group @if ($errors->has('slug')) has-error @endif">
        {!! Form::permalink('slug', $object->slug, $object->slug_id, route('slug.create'), route($public_route, config('slug.pattern')), url('/')) !!}
        {!! Form::error('slug', $errors) !!}
    </div>
@endif
<div id="slug_screen" data-screen="{{ $screen }}"></div>