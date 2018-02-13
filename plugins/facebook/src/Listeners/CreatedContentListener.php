<?php

namespace Botble\Facebook\Listeners;

use Botble\Base\Events\CreatedContentEvent;
use Exception;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class CreatedContentListener
{

    /**
     * @var LaravelFacebookSdk
     */
    protected $facebook;

    /**
     * CreatedContentListener constructor.
     * @param LaravelFacebookSdk $facebook
     */
    public function __construct(LaravelFacebookSdk $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Handle the event.
     *
     * @param CreatedContentEvent $event
     * @return void
     * @author Sang Nguyen
     */
    public function handle(CreatedContentEvent $event)
    {
        if (in_array($event->screen, config('facebook.screen_supported_auto_post', [])) && $event->request->input('facebook_auto_post') == 1) {
            try {
                $page_id = setting('facebook_page_id');
                $page_token = null;
                if (!empty($page_id)) {
                    $pages = setting('facebook_list_pages', []);
                    $pages = json_decode($pages, true);
                    foreach ($pages as $page) {
                        if ($page['id'] == $page_id) {
                            $page_token = $page['access_token'];
                            break;
                        }
                    }
                    if (!empty($page_token)) {
                        $content = $event->data->description ?? str_limit($event->data->content, 120);
                        $content = str_replace('&nbsp', ' ', strip_tags($content));
                        $this->facebook->post('/' . $page_id . '/feed', [
                            'message' => $content,
                            'link' => route('public.single', $event->data->slug),
                        ], $page_token);
                    }
                }
            } catch (Exception $exception) {
                info($exception->getMessage());
            }
        }
    }
}
