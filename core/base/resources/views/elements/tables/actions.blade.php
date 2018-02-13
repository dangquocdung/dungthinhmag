<div class="table-actions">
    @if (!empty($edit))
        <a href="{{ route($edit, $item->id) }}" class="btn btn-icon btn-sm btn-primary tip" data-original-title="{{ trans('bases::tables.edit') }}"><i class="fa fa-edit"></i></a>
    @endif

    @if (!empty($delete))
        <a class="btn btn-icon btn-sm btn-danger deleteDialog tip" data-toggle="modal" data-section="{{ route($delete, $item->id) }}" role="button" data-original-title="{{ trans('bases::tables.delete_entry') }}" >
            <i class="fa fa-trash-o"></i>
        </a>
    @endif
</div>