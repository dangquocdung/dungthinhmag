<?php

namespace Botble\Base\Http\Controllers;

use Botble\Base\Events\RenderingJsonFeedEvent;
use Botble\Base\Events\RenderingSingleEvent;
use Botble\Base\Events\RenderingSiteMapEvent;
use Botble\Page\Repositories\Interfaces\PageInterface;
use Botble\Slug\Repositories\Interfaces\SlugInterface;
use Illuminate\Routing\Controller;
use JsonFeedManager;
use SeoHelper;
use SiteMapManager;
use Theme;

class PublicController extends Controller
{
    /**
     * @var SlugInterface
     */
    protected $slugRepository;

    /**
     * PublicController constructor.
     * @param SlugInterface $slugRepository
     */
    public function __construct(SlugInterface $slugRepository)
    {
        $this->slugRepository = $slugRepository;
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getIndex()
    {
        Theme::breadcrumb()->add(__('Home'), route('public.index'));
        return Theme::scope('index')->render();
    }

    /**
     * @param $key
     * @return \Response
     * @author Sang Nguyen
     */
    public function getView($key)
    {
        $slug = $this->slugRepository->getFirstBy(['key' => $key]);

        if ($slug) {
            if ($slug->reference == 'page') {
                $page = app(PageInterface::class)->findById($slug->reference_id);
                $page = apply_filters(BASE_FILTER_BEFORE_GET_SINGLE, $page, app(PageInterface::class)->getModel(), PAGE_MODULE_SCREEN_NAME);
                if (!empty($page)) {
                    SeoHelper::setTitle($page->name)->setDescription($page->description);

                    if ($page->template) {
                        Theme::uses(setting('theme'))->layout($page->template);
                    }

                    admin_bar()->registerLink(trans('pages::pages.edit_this_page'), route('pages.edit', $page->id));

                    Theme::breadcrumb()->add(__('Home'), route('public.index'))->add($page->name, route('public.single', $slug));

                    do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, PAGE_MODULE_SCREEN_NAME, $page);
                    return Theme::scope('page', compact('page'))->render();
                }
            }

            $result = apply_filters(BASE_FILTER_PUBLIC_SINGLE_DATA, $slug);

            event(new RenderingSingleEvent($slug));

            if (!empty($result) && is_array($result)) {
                return Theme::scope($result['view'], $result['data'])->render();
            }
        }

        return abort(404);
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getSiteMap()
    {
        event(RenderingSiteMapEvent::class);

        // show your site map (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return SiteMapManager::render('xml');
    }

    /**
     * Generate JSON feed
     * @return array
     * @author Sang Nguyen
     */
    public function getJsonFeed()
    {
        event(RenderingJsonFeedEvent::class);
        return JsonFeedManager::render();
    }
}
