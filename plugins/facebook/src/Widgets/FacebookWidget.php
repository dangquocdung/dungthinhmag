<?php

namespace Botble\Facebook\Widgets;

use Botble\Widget\AbstractWidget;

class FacebookWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $frontendTemplate = 'facebook::widgets.frontend';

    /**
     * @var string
     */
    protected $backendTemplate = 'facebook::widgets.backend';

    /**
     * @var bool
     */
    protected $is_core = true;

    /**
     * FacebookWidget constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name' => __('Facebook Widget (Facebook Plugin)'),
            'description' => 'Facebook fan page widget',
            'facebook_name' => null,
            'facebook_id' => null,
        ]);
    }
}