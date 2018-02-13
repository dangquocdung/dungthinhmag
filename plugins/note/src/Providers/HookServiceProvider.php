<?php

namespace Botble\Note\Providers;

use Illuminate\Support\ServiceProvider;
use Botble\Note\Repositories\Interfaces\NoteInterface;
use Note;

class HookServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        add_filter(BASE_FILTER_REGISTER_CONTENT_TABS, [$this, 'addNoteTab'], 50, 2);
        add_filter(BASE_FILTER_REGISTER_CONTENT_TAB_INSIDE, [$this, 'addNoteContent'], 50, 3);
    }

    /**
     * @param $tabs
     * @param $screen
     * @return string
     * @author Sang Nguyen
     * @since 2.0
     */
    public function addNoteTab($tabs, $screen)
    {
        if (in_array($screen, Note::getScreens())) {
            return $tabs . view('note::tab')->render();
        }
        return $tabs;
    }

    /**
     * @param $tabs
     * @param $screen
     * @param $data
     * @return string
     * @author Sang Nguyen
     * @since 2.0
     */
    public function addNoteContent($tabs, $screen, $data = null)
    {
        if (in_array($screen, Note::getScreens())) {
            $notes = [];
            if (!empty($data)) {
                $notes = app(NoteInterface::class)->allBy([
                    'reference_id' => $data->id,
                    'reference_type' => $screen,
                ]);
            }
            return $tabs . view('note::content', compact('notes'))->render();
        }
        return $tabs;
    }
}
