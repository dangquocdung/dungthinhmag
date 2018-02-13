<div class="portlet light bordered portlet-no-padding">
    <div class="portlet-title">
        <div class="caption">
            <i class="{{ $icon or 'icon-settings' }} font-dark"></i>
            <span class="caption-subject font-dark">{{ $title }}</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            {!! $dataTable->table(['class' => 'table table-striped table-hover vertical-middle'], true) !!}
        </div>
    </div>
</div>
@section('javascript')
    {!! $dataTable->scripts() !!}
@stop