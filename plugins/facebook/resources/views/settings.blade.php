@extends('bases::layouts.master')
@section('content')
    {!! Form::open() !!}
    <div class="row">
        <div class="col-md-9">
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><span>{{ __('Facebook settings') }}</span></h4>
                </div>
                <div class="widget-body">
                    <div class="form-group @if ($errors->has('settings.facebook_enable')) has-error @endif">
                        <label for="facebook_enable" class="control-label">{{ __('Enable') }}</label>
                        {!! Form::select('settings[facebook_enable]', [0 => __('No'), 1 => __('Yes')], old('settings[facebook_enable]', setting('facebook_enable')), ['class' => 'form-control', 'id' => 'facebook_enable']) !!}
                        {!! Form::error('settings.facebook_enable', $errors) !!}
                    </div>
                    @if (!app()->environment('demo'))
                        <div class="form-group @if ($errors->has('settings.facebook_access_token')) has-error @endif">
                            <label for="facebook_access_token" class="control-label">{{ __('Access Token') }}</label>
                            <div class="input-group">
                                {!! Form::text('settings[facebook_access_token]', old('settings[facebook_access_token]', setting('facebook_access_token')), ['class' => 'form-control', 'id' => 'facebook_access_token', 'disabled' => true]) !!}
                                <span class="input-group-addon" style="padding: 0; border: none; background: none;">
                                    @if (setting('facebook_access_token') != null)
                                        <a href="{{ route('facebook.remove-access-token') }}" class="btn btn-danger" style="line-height: 1.9;">{{ __('Remove access token') }}</a>
                                    @else
                                        <a href="{{ route('facebook.get-access-token') }}" class="btn btn-success" style="line-height: 1.9;">{{ __('Get access token') }}</a>
                                    @endif
                                </span>
                            </div>
                            @if (setting('facebook_token_expire_date') != null)
                                @php
                                    $expire_date = \Carbon\Carbon::createFromTimestamp(setting('facebook_token_expire_date'));
                                @endphp
                                <div class="text-danger">
                                    <small>{{ __('Access token will be expired on :date.', ['date' => $expire_date->toDateTimeString()]) }}</small>
                                </div>
                            @endif
                            {!! Form::error('settings.facebook_access_token', $errors) !!}
                        </div>
                        @if (setting('facebook_access_token') != null && !empty($list_pages))
                            <div class="form-group @if ($errors->has('settings.facebook_page_id')) has-error @endif">
                                <label for="facebook_page_id" class="control-label">{{ __('Select page') }}</label>
                                {!! Form::select('settings[facebook_page_id]', $list_pages, old('settings[facebook_page_id]', setting('facebook_page_id')), ['class' => 'form-control', 'id' => 'facebook_page_id']) !!}
                                {!! Form::error('settings.facebook_page_id', $errors) !!}
                            </div>
                        @else
                            <div class="form-group @if ($errors->has('settings.facebook_page_id')) has-error @endif">
                                <label for="facebook_page_id" class="control-label">{{ __('Fan page ID') }}</label>
                                {!! Form::text('settings[facebook_page_id]', old('settings[facebook_page_id]', setting('facebook_page_id')), ['class' => 'form-control', 'id' => 'facebook_page_id']) !!}
                                <div class="text-success">
                                    <small>{!! __('You can get fan page ID using this site :link.', ['link' => anchor_link('https://findmyfbid.com', 'https://findmyfbid.com', ['target' => '_blank'])]) !!} </small>
                                </div>
                                {!! Form::error('settings.facebook_page_id', $errors) !!}
                            </div>
                        @endif
                    @endif
                    <div class="form-group @if ($errors->has('settings.facebook_add_script')) has-error @endif">
                        <label for="facebook_add_script" class="control-label">{{ __('Add Facebook script to footer of page') }}</label>
                        {!! Form::select('settings[facebook_add_script]', [0 => __('No'), 1 => __('Yes')], old('settings[facebook_add_script]', setting('facebook_add_script', 1)), ['class' => 'form-control', 'id' => 'facebook_add_script']) !!}
                        {!! Form::error('settings.facebook_add_script', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_use_comments')) has-error @endif">
                        <label for="facebook_use_comments" class="control-label">{{ __('Use Facebook Comment') }}</label>
                        {!! Form::select('settings[facebook_use_comments]', [0 => __('No'), 1 => __('Yes')], old('settings[facebook_use_comments]', setting('facebook_use_comments', 1)), ['class' => 'form-control', 'id' => 'facebook_use_comments']) !!}
                        {!! Form::error('settings.facebook_use_comments', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_show_chat_box')) has-error @endif">
                        <label for="facebook_show_chat_box" class="control-label">{{ __('Show chat box') }}</label>
                        {!! Form::select('settings[facebook_show_chat_box]', [0 => __('No'), 1 => __('Yes')], old('settings[facebook_show_chat_box]', setting('facebook_show_chat_box', 1)), ['class' => 'form-control', 'id' => 'facebook_show_chat_box']) !!}
                        {!! Form::error('settings.facebook_show_chat_box', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_title')) has-error @endif">
                        <label for="facebook_chat_title" class="control-label">{{ __('Title of chat box') }}</label>
                        {!! Form::text('settings[facebook_chat_title]', old('settings[facebook_chat_title]', setting('facebook_chat_title', 'Chat via Facebook')), ['class' => 'form-control', 'id' => 'facebook_chat_title']) !!}
                        {!! Form::error('settings.facebook_chat_title', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_width')) has-error @endif">
                        <label for="facebook_chat_width" class="control-label">{{ __('Chat box width') }}</label>
                        {!! Form::number('settings[facebook_chat_width]', old('settings[facebook_chat_width]', setting('facebook_chat_width', 300)), ['class' => 'form-control', 'id' => 'facebook_chat_width']) !!}
                        {!! Form::error('settings.facebook_chat_width', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_height')) has-error @endif">
                        <label for="facebook_chat_height" class="control-label">{{ __('Chat box height') }}</label>
                        {!! Form::number('settings[facebook_chat_height]', old('settings[facebook_chat_height]', setting('facebook_chat_height', 400)), ['class' => 'form-control', 'id' => 'facebook_chat_height']) !!}
                        {!! Form::error('settings.facebook_chat_height', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_small_header')) has-error @endif">
                        <label for="facebook_chat_small_header" class="control-label">{{ __('Small header') }}</label>
                        {!! Form::select('settings[facebook_chat_small_header]', ['false' => __('No'), 'true' => __('Yes')], old('settings[facebook_chat_small_header]', setting('facebook_chat_small_header', 'true')), ['class' => 'form-control', 'id' => 'facebook_chat_small_header']) !!}
                        {!! Form::error('settings.facebook_chat_small_header', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_adapt_container_width')) has-error @endif">
                        <label for="facebook_chat_adapt_container_width" class="control-label">{{ __('Adapt container width') }}</label>
                        {!! Form::select('settings[facebook_chat_adapt_container_width]', ['false' => __('No'), 'true' => __('Yes')], old('settings[facebook_chat_adapt_container_width]', setting('facebook_chat_adapt_container_width', 'true')), ['class' => 'form-control', 'id' => 'facebook_chat_adapt_container_width']) !!}
                        {!! Form::error('settings.facebook_chat_adapt_container_width', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_hide_cover')) has-error @endif">
                        <label for="facebook_chat_hide_cover" class="control-label">{{ __('Hide cover') }}</label>
                        {!! Form::select('settings[facebook_chat_hide_cover]', ['false' => __('No'), 'true' => __('Yes')], old('settings[facebook_chat_hide_cover]', setting('facebook_chat_hide_cover', 'false')), ['class' => 'form-control', 'id' => 'facebook_chat_hide_cover']) !!}
                        {!! Form::error('settings.facebook_chat_hide_cover', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_show_facepile')) has-error @endif">
                        <label for="facebook_chat_show_facepile" class="control-label">{{ __('Show facepile') }}</label>
                        {!! Form::select('settings[facebook_chat_show_facepile]', ['false' => __('No'), 'true' => __('Yes')], old('settings[facebook_chat_show_facepile]', setting('facebook_chat_show_facepile', 'true')), ['class' => 'form-control', 'id' => 'facebook_chat_show_facepile']) !!}
                        {!! Form::error('settings.facebook_chat_show_facepile', $errors) !!}
                    </div>
                    <div class="form-group @if ($errors->has('settings.facebook_chat_show_posts')) has-error @endif">
                        <label for="facebook_chat_show_posts" class="control-label">{{ __('Show posts') }}</label>
                        {!! Form::select('settings[facebook_chat_show_posts]', ['false' => __('No'), 'true' => __('Yes')], old('settings[facebook_chat_show_posts]', setting('facebook_chat_show_posts', 'true')), ['class' => 'form-control', 'id' => 'facebook_chat_show_posts']) !!}
                        {!! Form::error('settings.facebook_chat_show_posts', $errors) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 right-sidebar">
            @include('bases::elements.form-actions', ['only_save' => true])
        </div>
    </div>
    {!! Form::close() !!}
@endsection