@extends('bases::layouts.master')
@section('content')
    {!! Form::open(['route' => 'simple-slider.create']) !!}
        @php do_action(BASE_ACTION_CREATE_CONTENT_NOTIFICATION, SIMPLE_SLIDER_MODULE_SCREEN_NAME, request(), null) @endphp
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        <div class="form-group @if ($errors->has('title')) has-error @endif">
                            <label for="title" class="control-label required">{{ trans('bases::forms.title') }}</label>
                            {!! Form::text('title', old('title'), ['class' => 'form-control', 'id' => 'title', 'data-counter' => 255]) !!}
                            {!! Form::error('title', $errors) !!}
                        </div>
                        <div class="form-group @if ($errors->has('link')) has-error @endif">
                            <label for="link" class="control-label">{{ trans('bases::forms.link') }}</label>
                            {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => 'http://...', 'id' => 'link', 'data-counter' => 255]) !!}
                            {!! Form::error('link', $errors) !!}
                        </div>
                        <div class="form-group @if ($errors->has('description')) has-error @endif">
                            <label for="description" class="control-label">{{ trans('bases::forms.description') }}</label>
                            {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'rows' => 4, 'id' => 'description', 'placeholder' => trans('bases::forms.description'), 'data-counter' => 400]) !!}
                            {!! Form::error('description', $errors) !!}
                        </div>
                        <div class="form-group @if ($errors->has('order')) has-error @endif">
                            <label for="order" class="control-label">{{ trans('bases::forms.order_by') }}</label>
                            {!! Form::text('order', old('order', 0), ['class' => 'form-control', 'id' => 'order', 'placeholder' => trans('bases::forms.order_by_placeholder'), 'data-counter' => 60]) !!}
                            {!! Form::error('order', $errors) !!}
                        </div>
                    </div>
                </div>
                @php do_action(BASE_ACTION_META_BOXES, SIMPLE_SLIDER_MODULE_SCREEN_NAME, 'advanced') @endphp
            </div>
            <div class="col-md-3 right-sidebar">
                @include('bases::elements.form-actions')
                @include('bases::elements.forms.status')
                @php do_action(BASE_ACTION_META_BOXES, SIMPLE_SLIDER_MODULE_SCREEN_NAME, 'top') @endphp
                <div class="widget meta-boxes">
                    <div class="widget-title">
                        <h4><span>{{ trans('bases::forms.image') }}</span></h4>
                    </div>
                    <div class="widget-body">
                        {!! Form::mediaImage('image', old('image')) !!}
                        {!! Form::error('image', $errors) !!}
                    </div>
                </div>
                @php do_action(BASE_ACTION_META_BOXES, SIMPLE_SLIDER_MODULE_SCREEN_NAME, 'side') @endphp
            </div>
        </div>
    {!! Form::close() !!}
@stop
