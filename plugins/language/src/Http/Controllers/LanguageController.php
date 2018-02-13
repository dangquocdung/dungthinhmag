<?php

namespace Botble\Language\Http\Controllers;

use Assets;
use Botble\ACL\Models\UserMeta;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Base\Supports\Language;
use Botble\Language\Repositories\Interfaces\LanguageMetaInterface;
use Botble\Language\Http\Requests\LanguageRequest;
use Botble\Language\Repositories\Interfaces\LanguageInterface;
use Exception;
use Illuminate\Http\Request;
use Setting;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;

class LanguageController extends BaseController
{
    /**
     * @var LanguageInterface
     */
    protected $languageRepository;

    /**
     * @var LanguageMetaInterface
     */
    protected $languageMetaRepository;


    /**
     * LanguageController constructor.
     * @param LanguageInterface $languageRepository
     * @param LanguageMetaInterface $languageMetaRepository
     * @author Sang Nguyen
     */
    public function __construct(LanguageInterface $languageRepository, LanguageMetaInterface $languageMetaRepository)
    {
        $this->languageRepository = $languageRepository;
        $this->languageMetaRepository = $languageMetaRepository;
    }

    /**
     * Get list language page
     * @author Sang Nguyen
     */
    public function getList()
    {
        page_title()->setTitle(trans('language::language.name'));

        Assets::addJavascriptDirectly('vendor/core/plugins/language/js/language.js');
        $languages = Language::getListLanguages();
        $flags = Language::getListLanguageFlags();
        $active_languages = $this->languageRepository->all();
        return view('language::index', compact('languages', 'flags', 'active_languages'));
    }

    /**
     * @param LanguageRequest $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function postStore(LanguageRequest $request, AjaxResponse $response)
    {
        try {
            $language = $this->languageRepository->getFirstBy([
                'lang_code' => $request->input('lang_code'),
            ]);
            if ($language) {
                return $response->setError(true)->setMessage(__('This language is added already!'));
            }
            $language = $this->languageRepository->createOrUpdate($request->except('lang_id'));

            event(new CreatedContentEvent(LANGUAGE_MODULE_SCREEN_NAME, $request, $language));

            return $response->setData(view('language::partials.language-item', ['item' => $language])->render())
                ->setMessage(trans('bases::notices.create_success_message'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function postEdit(Request $request, AjaxResponse $response)
    {
        try {
            $language = $this->languageRepository->getFirstBy(['lang_id' => $request->input('lang_id')]);
            if (empty($language)) {
                abort(404);
            }
            $language->fill($request->input());
            $language = $this->languageRepository->createOrUpdate($language);

            event(new UpdatedContentEvent(LANGUAGE_MODULE_SCREEN_NAME, $request, $language));

            return $response->setData(view('language::partials.language-item', ['item' => $language])->render())
                ->setMessage(trans('bases::notices.update_success_message'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }

    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function postChangeItemLanguage(Request $request, AjaxResponse $response)
    {
        $content_id = $request->input('lang_meta_content_id') ? $request->input('lang_meta_content_id') : $request->input('lang_meta_created_from');
        $current_language = $this->languageMetaRepository->getFirstBy([
            'lang_meta_content_id' => $content_id,
            'lang_meta_reference' => $request->input('lang_meta_reference'),
        ]);
        $others = $this->languageMetaRepository->getModel();
        if ($current_language) {
            $others = $others->where('lang_meta_code', '!=', $request->input('lang_meta_current_language'))
                ->where('lang_meta_origin', $current_language->origin);
        }
        $others = $others->select('lang_meta_content_id', 'lang_meta_code')
            ->get();
        $data = [];
        foreach ($others as $other) {
            $language = $this->languageRepository->getFirstBy(['lang_code' => $other->lang_code], [
                'lang_flag',
                'lang_name',
                'lang_code',
            ]);
            if (!empty($language) && !empty($current_language) && $language->lang_code != $current_language->lang_meta_code) {
                $data[$language->lang_code]['lang_flag'] = $language->lang_flag;
                $data[$language->lang_code]['lang_name'] = $language->lang_name;
                $data[$language->lang_code]['lang_meta_content_id'] = $other->lang_meta_content_id;
            }
        }

        $languages = $this->languageRepository->all();
        foreach ($languages as $language) {
            if (!array_key_exists($language->lang_code, $data) && $language->lang_code != $request->input('lang_meta_current_language')) {
                $data[$language->lang_code]['lang_flag'] = $language->lang_flag;
                $data[$language->lang_code]['lang_name'] = $language->lang_name;
                $data[$language->lang_code]['lang_meta_content_id'] = null;
            }
        }

        return $response->setData($data);
    }

    /**
     * @param Request $request
     * @param $id
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getDelete(Request $request, $id, AjaxResponse $response)
    {
        try {
            $language = $this->languageRepository->getFirstBy(['lang_id' => $id]);
            $this->languageRepository->delete($language);
            $delete_default = false;
            if ($language->lang_is_default) {
                $default = $this->languageRepository->getFirstBy([
                    'lang_is_default' => 0,
                ]);
                $default->lang_is_default = 1;
                $this->languageRepository->createOrUpdate($default);
                $delete_default = $default->lang_id;
            }

            $this->languageMetaRepository->deleteBy(['lang_meta_code' => $language->lang_code]);

            event(new DeletedContentEvent(LANGUAGE_MODULE_SCREEN_NAME, $request, $language));

            return $response->setData($delete_default)->setMessage(trans('bases::notices.delete_success_message'));
        } catch (Exception $e) {
            return $response->setError(true)->setMessage(trans('bases::notices.cannot_delete'));
        }
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getSetDefault(Request $request, AjaxResponse $response)
    {
        $id = $request->input('lang_id');

        $this->languageRepository->update(['lang_is_default' => 1], ['lang_is_default' => 0]);
        $language = $this->languageRepository->getFirstBy(['lang_id' => $id]);
        $language->lang_is_default = 1;
        $this->languageRepository->createOrUpdate($language);

        event(new UpdatedContentEvent(LANGUAGE_MODULE_SCREEN_NAME, $request, $language));

        return $response->setMessage(trans('bases::notices.update_success_message'));
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getLanguage(Request $request, AjaxResponse $response)
    {
        $language = $this->languageRepository->getFirstBy(['lang_id' => $request->input('lang_id')]);
        return $response->setData($language);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEditSettings(Request $request)
    {
        Setting::set('language_hide_default', $request->input('language_hide_default', false));
        Setting::set('language_display', $request->input('language_display'));
        Setting::set('language_switcher_display', $request->input('language_switcher_display'));
        Setting::set('language_hide_languages', json_encode($request->input('language_hide_languages', [])));
        Setting::save();
        return redirect()->back()->with('success_msg', trans('bases::notices.update_success_message'));
    }

    /**
     * @param $code
     * @author Sang Nguyen
     * @since 2.2
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getChangeDataLanguage($code)
    {
        UserMeta::setMeta('languages_current_data_language', $code);
        return redirect()->back();
    }
}
