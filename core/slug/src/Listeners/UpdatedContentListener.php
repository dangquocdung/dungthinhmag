<?php

namespace Botble\Slug\Listeners;

use Botble\Base\Events\UpdatedContentEvent;
use Botble\Slug\Repositories\Interfaces\SlugInterface;
use Botble\Slug\Services\SlugService;
use Exception;

class UpdatedContentListener
{

    /**
     * @var SlugInterface
     */
    protected $slugRepository;

    /**
     * SlugService constructor.
     * @param SlugInterface $slugRepository
     */
    public function __construct(SlugInterface $slugRepository)
    {
        $this->slugRepository = $slugRepository;
    }

    /**
     * Handle the event.
     *
     * @param UpdatedContentEvent $event
     * @return void
     * @author Sang Nguyen
     */
    public function handle(UpdatedContentEvent $event)
    {
        if (in_array($event->screen, config('slug.supported'))) {
            try {
                $slug = $event->request->input('slug');

                $item = $this->slugRepository->getFirstBy([
                    'reference' => $event->screen,
                    'reference_id' => $event->data->id,
                ]);
                if ($item) {
                    $slugService = new SlugService(app(SlugInterface::class));
                    $item->key = $slugService->create($slug, $event->request->input('slug_id'));
                    $this->slugRepository->createOrUpdate($item);
                } else {
                    $this->slugRepository->createOrUpdate([
                        'key' => $slug,
                        'reference' => $event->screen,
                        'reference_id' => $event->data->id,
                    ]);
                }
            } catch (Exception $exception) {
                info($exception->getMessage());
            }
        }
    }
}
