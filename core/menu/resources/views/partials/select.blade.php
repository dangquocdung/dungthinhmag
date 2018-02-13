<ul {!! $options !!}>
    @foreach ($object as $key => $row)
        <li>
            {!! Form::checkbox('menu_id', $row->id, null, ['class' => 'styled', 'id' => 'menu_id_' . $row->id]) !!}
            <label for="menu_id_{{ $row->id }}" data-title="{{ $row->name }}" data-related-id="{{ $row->id }}"
                   data-type="{{ $screen }}">{{ $row->name }}</label>

            @if (Schema::hasColumn($model->getTable(), 'parent_id'))
                {!!
                    Menu::generateSelect([
                        'model' => $model,
                        'screen' => $screen,
                        'parent_id' => $row->id
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>
