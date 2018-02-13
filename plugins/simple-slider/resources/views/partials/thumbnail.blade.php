<a href="{{ route('simple-slider.edit', $item->id) }}" title="{{ $item->title }}">
    <img src="{{ url(get_object_image($item->image, 'thumb')) }}" alt="{{ $item->title }}" width="80">
</a>
