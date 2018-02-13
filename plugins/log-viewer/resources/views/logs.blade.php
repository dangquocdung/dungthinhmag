@extends('bases::layouts.master')

@section('content')
    @include('log-viewer::partials.style')
    <div class="main-form">

    {!! $rows->render() !!}

    <div class="table-responsive">
        <table class="table table-condensed table-hover table-stats table-log-viewer">
            <thead>
                <tr>
                    @foreach($headers as $key => $header)
                        <th class="{{ $key == 'date' ? 'text-left' : 'text-center' }}">
                            @if ($key == 'date')
                                <span class="label label-info">{{ $header }}</span>
                            @else
                                <span class="level level-{{ $key }}">
                                    {!! log_styler()->icon($key) . ' ' . $header !!}
                                </span>
                            @endif
                        </th>
                    @endforeach
                    <th class="text-center" width="120">{{ trans('log-viewer::log-viewer.actions') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rows as $date => $item)
                <tr>
                    @foreach($item as $key => $value)
                        <td class="{{ $key == 'date' ? 'text-left' : 'text-center' }}">
                            @if ($key == 'date')
                                <span class="label label-primary">{{ $value }}</span>
                            @elseif ($value == 0)
                                <span class="level level-empty">{{ $value }}</span>
                            @else
                                <a href="{{ route('log-viewer::logs.filter', [$date, $key]) }}">
                                    <span class="level level-{{ $key }}">{{ $value }}</span>
                                </a>
                            @endif
                        </td>
                    @endforeach
                    <td class="text-right">
                        <a href="{{ route('log-viewer::logs.show', [$date]) }}" class="btn btn-xs btn-info">
                            <i class="fa fa-search"></i>
                        </a>
                        <a href="{{ route('log-viewer::logs.download', [$date]) }}" class="btn btn-xs btn-success">
                            <i class="fa fa-download"></i>
                        </a>
                        <a href="#delete-log-modal" class="btn btn-xs btn-danger" data-log-date="{{ $date }}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {!! $rows->render() !!}

    <div id="delete-log-modal" class="modal fade">
        <div class="modal-dialog">
            <form id="delete-log-form" action="{{ route('log-viewer::logs.delete') }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="date">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="til_img"></i><strong>{{ trans('log-viewer::log-viewer.delete_log_file') }}</strong></h4>
                    </div>

                    <div class="modal-body with-padding">
                        <p>{!! trans('log-viewer::log-viewer.confirm_delete_msg', ['date' => null]) !!}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default pull-left" data-dismiss="modal">{{ trans('bases::forms.cancel') }}</button>
                        <button type="submit" class="btn btn-sm btn-danger" data-loading-text="{{ trans('log-viewer::log-viewer.loading') }}">{{ trans('log-viewer::log-viewer.delete_button') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@stop

@section('javascript')
    <script>
        $(function () {
            var deleteLogModal = $('div#delete-log-modal');
            var deleteLogForm = $('form#delete-log-form');
            var submitBtn = deleteLogForm.find('button[type=submit]');

            $('a[href="#delete-log-modal"]').click(function (event) {
                event.preventDefault();
                var date = $(this).data('log-date');
                deleteLogForm.find('input[name=date]').val(date);
                deleteLogModal.find('.modal-body p .log_date').text(date);

                deleteLogModal.modal('show');
            });

            deleteLogForm.submit(function (event) {
                event.preventDefault();
                submitBtn.button('loading');

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        submitBtn.button('reset');
                        if (data.result === 'success') {
                            deleteLogModal.modal('hide');
                            location.reload();
                        }
                        else {
                            Botble.showNotice('error', 'AJAX ERROR ! Check the console !', Botble.languages.notices_msg.error);
                            console.error(data);
                        }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        Botble.showNotice('error', 'AJAX ERROR ! Check the console !', Botble.languages.notices_msg.error);
                        console.error(errorThrown);
                        submitBtn.button('reset');
                    }
                });
                return false;
            });

            deleteLogModal.on('hidden.bs.modal', function () {
                deleteLogForm.find('input[name=date]').val('');
                deleteLogModal.find('.modal-body p').html('');
            });
        });
    </script>
@stop
