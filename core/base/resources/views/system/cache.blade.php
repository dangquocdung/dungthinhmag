@extends('bases::layouts.master')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-refresh"></i>
                {{ trans('bases::cache.cache_commands') }}
            </h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered vertical-middle table-hover">
                <colgroup>
                    <col width="70%">
                    <col width="30%">
                </colgroup>
                <tbody>
                    <tr>
                        <td>
                            {{ trans('bases::cache.commands.clear_cms_cache.description') }}
                        </td>
                        <td>
                            <button class="btn btn-danger btn-block btn-clear-cache" data-type="clear_cms_cache" data-url="{{ route('system.cache.clear') }}">
                                {{ trans('bases::cache.commands.clear_cms_cache.title') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ trans('bases::cache.commands.refresh_compiled_views.description') }}
                        </td>
                        <td>
                            <button class="btn btn-warning btn-block btn-clear-cache" data-type="refresh_compiled_views" data-url="{{ route('system.cache.clear') }}">
                                {{ trans('bases::cache.commands.refresh_compiled_views.title') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ trans('bases::cache.commands.clear_config_cache.description') }}
                        </td>
                        <td>
                            <button class="btn green-meadow btn-block btn-clear-cache" data-type="clear_config_cache" data-url="{{ route('system.cache.clear') }}">
                                {{ trans('bases::cache.commands.clear_config_cache.title') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ trans('bases::cache.commands.clear_route_cache.description') }}
                        </td>
                        <td>
                            <button class="btn green-meadow btn-block btn-clear-cache" data-type="clear_route_cache" data-url="{{ route('system.cache.clear') }}">
                                {{ trans('bases::cache.commands.clear_route_cache.title') }}
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop