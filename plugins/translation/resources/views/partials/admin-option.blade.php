<div class="col-md-4">
    <div class="list-group config-item">
        <a href="{{ route('translations.list') }}" class="list-group-item">
            <i class="fa fa-language" style="font-size: 20px;"></i>
            <h4 class="list-group-item-heading">{{ trans('translations::translation.translations') }}</h4>
            <p class="list-group-item-text">{{ trans('translations::translation.translations_description') }}</p>
        </a>
    </div>
</div>