<?php

namespace Botble\Base\Listeners;

use Botble\Base\Events\DeletedContentEvent;
use Exception;

class DeletedContentListener
{

    /**
     * Handle the event.
     *
     * @param DeletedContentEvent $event
     * @return void
     * @author Sang Nguyen
     */
    public function handle(DeletedContentEvent $event)
    {
        try {
            do_action(BASE_ACTION_AFTER_DELETE_CONTENT, $event->screen, $event->request, $event->data);

            cache()->forget('public.sitemap');
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
