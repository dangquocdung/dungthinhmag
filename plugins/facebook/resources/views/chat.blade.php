<link rel="stylesheet" href="{{ url('vendor/core/plugins/facebook/css/facebook.css') }}">

<div class="fb-livechat">
    <div class="ctrlq fb-overlay"></div>
    <div class="fb-widget">
        <div class="ctrlq fb-close"></div>
        <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/{{ setting('facebook_page_id') }}"
             data-width="{{ setting('facebook_chat_width', 300) }}"
             data-height="{{ setting('facebook_chat_height', 400) }}"
             data-small-header="{{ setting('facebook_chat_small_header', true) }}"
             data-adapt-container-width="{{ setting('facebook_chat_adapt_container_width', true) }}"
             data-hide-cover="{{ setting('facebook_chat_hide_cover', false) }}"
             data-show-facepile="{{ setting('facebook_chat_show_facepile', true) }}"
             data-show-posts="{{ setting('facebook_chat_show_posts', true) }}"
        ></div>
    </div>
    <a href="https://m.me/{{ setting('facebook_page_id') }}" title="{{ __('Send message to us via Messenger') }}" class="ctrlq fb-button">
        <div class="bubble-msg">{{ __('Need support?') }}</div>
    </a>
</div>

<script src="{{ url('vendor/core/plugins/facebook/js/facebook.js') }}"></script>