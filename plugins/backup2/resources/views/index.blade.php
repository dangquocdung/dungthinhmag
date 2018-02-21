@extends('bases::layouts.master')
@section('content')
    <div class="clearfix"></div>
    <p><button class="btn btn-primary" id="generate_backup">{{ trans('backup::backup.generate_btn') }}</button></p>
    <table class="table table-striped" id="table-backups">
        <thead>
            <tr>
                <th>{{ trans('bases::tables.name') }}</th>
                <th>{{ trans('bases::tables.description') }}</th>
                <th>{{ __('Size') }}</th>
                <th>{{ trans('bases::tables.created_at') }}</th>
                <th>{{ trans('bases::tables.operations') }}</th>
            </tr>
        </thead>
        <tbody>
            @if (count($backups) > 0)
                @foreach($backups as $key => $backup)
                    @include('backup::partials.backup-item', ['data' => $backup, 'key' => $key, 'odd' => $loop->index % 2 == 0 ? true : false])
                @endforeach
            @else
                <tr class="text-center">
                    <td colspan="5">{{ __('There is no backup now!') }}</td>
                </tr>
            @endif
        </tbody>
    </table>
    {!! Form::modalAction('create-backup-modal', trans('backup::backup.create'), 'info', view('backup::partials.create')->render(), 'create-backup-button', trans('backup::backup.create_btn')) !!}
    {!! Form::modalAction('restore-backup-modal', trans('backup::backup.restore'), 'info', trans('backup::backup.restore_confirm_msg'), 'restore-backup-button', trans('backup::backup.restore_btn')) !!}
    <div data-route-create="{{ route('backups.create') }}"></div>
@stop