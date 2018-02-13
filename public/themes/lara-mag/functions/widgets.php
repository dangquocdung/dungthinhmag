<?php

register_sidebar([
    'id' => 'footer_sidebar',
    'name' => __('Footer sidebar'),
    'description' => __('This is footer sidebar section'),
]);

require_once __DIR__ . '/../widgets/custom-menu/custom-menu.php';
require_once __DIR__ . '/../widgets/recent-posts/recent-posts.php';
require_once __DIR__ . '/../widgets/facebook/facebook.php';
require_once __DIR__ . '/../widgets/text/text.php';
require_once __DIR__ . '/../widgets/ads/ads.php';
require_once __DIR__ . '/../widgets/popular-posts/popular-posts.php';
require_once __DIR__ . '/../widgets/video-posts/video-posts.php';

register_widget(CustomMenuWidget::class);
register_widget(RecentPostsWidget::class);
register_widget(FacebookWidget::class);
register_widget(TextWidget::class);
register_widget(AdsWidget::class);
register_widget(PopularPostsWidget::class);
register_widget(VideoPostsWidget::class);
