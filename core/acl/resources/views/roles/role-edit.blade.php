@extends('bases::layouts.master')
@section('content')
    {!! Form::open() !!}
    <div class="main-form">
        <div class="form-group">
            <label>{{ trans('acl::permissions.role_name') }}</label>
            {!! Form::text('name', $role->name, ['class' => 'form-control']) !!}
            {!! Form::error('name', $errors) !!}
        </div>

        <div class="form-group">
            <label>{{ trans('acl::permissions.role_description') }}</label>
            {!! Form::textarea('description', $role->description, ['class' => 'form-control', 'rows' => 4]) !!}
            {!! Form::error('description', $errors) !!}
        </div>

        <div class="form-group @if ($errors->has('is_default')) has-error @endif">
            <input type="checkbox" id="is_default" name="is_default" value="1" @if ($role->is_default) checked="checked" @endif>
            <label for="is_default">{{ trans('bases::forms.is_default') }}</label>
            {!! Form::error('is_default', $errors) !!}
        </div>

        <div class="form-actions text-right">
            <a href="{{ route('roles.list') }}" class="btn btn-default" id="cancelButton">{{ trans('acl::permissions.cancel') }}</a>
            <input type="reset" value="{{ trans('acl::permissions.reset') }}" class="btn btn-default">
            <a href="{{ route('roles.duplicate', [$role->id]) }}" class="btn btn-primary">{{ trans('acl::permissions.duplicate') }}</a>
            <input type="submit" value="{{ trans('acl::permissions.save') }}" class="btn btn-success">
        </div>
    </div>

    <div class="widget">
        <div class="widget-title">
            <h4><i class="box_img_sale"></i><span> {{ trans('acl::permissions.permission_flags') }}</span></h4>
        </div>
        <div class="widget-body">
            <!-- Include New UI of Permission Flags -->
            @include('acl::roles.role-permissions')
            <!-- Include New UI of Permission Flags -->
            <div class="form-actions text-right">
                <a href="{{ route('roles.list') }}" class="btn btn-default" id="cancelButton">{{ trans('acl::permissions.cancel') }}</a>
                <input type="reset" value="{{ trans('acl::permissions.reset') }}" class="btn btn-default">
                <a href="{{ route('roles.duplicate', [$role->id]) }}" class="btn btn-primary">{{ trans('acl::permissions.duplicate') }}</a>
                <input type="submit" value="{{ trans('acl::permissions.save') }}" class="btn btn-success">
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@stop
