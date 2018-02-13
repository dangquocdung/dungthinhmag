<?php

namespace Botble\Slug\Listeners;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Slug\Repositories\Interfaces\SlugInterface;
use Botble\Slug\Services\SlugService;
use Exception;

class CreatedContentListener
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
     * @param CreatedContentEvent $event
     * @param SlugService $slugService
     * @return void
     * @author Sang Nguyen
     */
    public function handle(CreatedContentEvent $event)
    {
        if (in_array($event->screen, config('slug.supported'))) {
            try {
                $slug = $event->request->input('slug');
                $slugService = new SlugService(app(SlugInterface::class));

                $this->slugRepository->createOrUpdate([
                    'key' => $slugService->create($slug),
                    'reference' => $event->screen,
                    'reference_id' => $event->data->id,
                ]);
            } catch (Exception $exception) {
                info($exception->getMessage());
            }
        }
    }
}
