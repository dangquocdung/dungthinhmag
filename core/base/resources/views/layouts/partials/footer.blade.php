<div class="page-footer">
    <div class="page-footer-inner">
        <div class="row">
            <div class="col-md-6">
                {!! trans('bases::layouts.copyright', ['year' => Carbon::now()->format('Y'), 'company' => config('cms.base_name'), 'version' => config('cms.version')]) !!}
            </div>
            <div class="col-md-6 text-right">
                {{ trans('bases::layouts.page_loaded_time') }} {{ round((microtime(true) - LARAVEL_START), 2) }}s
            </div>
        </div>
    </div>
</div>