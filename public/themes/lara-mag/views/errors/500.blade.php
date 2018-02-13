<section class="sub-page">
    <section class="container" style="padding: 40px 0; min-height: 500px">
        <h3>{{ __('Page could not be loaded') }}</h3>
        <p>{{ __('This may have occurred because of several reasons') }}</p>
        <ul>
            <li>{{ __('The page you requested does not exist.') }}</li>
            <li>{{ __('The link you clicked is no longer.') }}</li>
            <li>{{ __('The page may have moved to a new location.') }}</li>
            <li>{{ __('An error may have occurred.') }}</li>
            <li>{{ __('You are not authorized to view the requested resource.') }}</li>
        </ul>

        <p>{!! __('Please try again in a few minutes, or alternatively return to the dashboard by <a href=":link">clicking here</a>.', ['link' => route('public.index')]) !!}</p>
    </section><!-- end .container -->
</section>