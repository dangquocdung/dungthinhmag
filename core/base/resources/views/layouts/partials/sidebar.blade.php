@foreach ($menus = dashboard_menu()->getAll() as $menu)
    <li class="nav-item @if ($menu->active) active @endif" id="{{ $menu->id }}">
        <a href="{{ $menu->url }}" class="nav-link nav-toggle">
            <i class="{{ $menu->icon }}"></i>
            <span class="title">{{ $menu->name }} {!! apply_filters(BASE_FILTER_APPEND_MENU_NAME, null, $menu->id) !!}</span>
            @if (isset($menu->children) && $menu->children->count()) <span class="arrow @if ($menu->active) open @endif"></span> @endif
        </a>
        @if (isset($menu->children) && $menu->children->count())
            <ul class="sub-menu hidden-ul">
                @foreach ($menu->children as $item)
                    <li class="nav-item @if ($item->active) active @endif" id="{{ $item->id }}">
                        <a href="{{ $item->url }}" class="nav-link">
                            <i class="{{ $item->icon }}"></i>
                            {{ $item->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
