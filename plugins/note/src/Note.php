<?php

namespace Botble\Note;

use Auth;
use Botble\Note\Events\NoteBoxEvent;
use Botble\Note\Repositories\Interfaces\NoteInterface;
use Eloquent;

class Note
{
    /**
     * @var array
     */
    protected $screens = [];

    /**
     * @var NoteInterface
     */
    protected $noteRepository;

    /**
     * Gallery constructor.
     * @author Sang Nguyen
     */
    public function __construct(NoteInterface $noteRepository)
    {
        $this->screens = [
            PAGE_MODULE_SCREEN_NAME,
        ];

        if (defined('POST_MODULE_SCREEN_NAME')) {
            $this->screens[] = POST_MODULE_SCREEN_NAME;
        }

        $this->noteRepository = $noteRepository;
    }

    /**
     * @param $module
     * @author Sang Nguyen
     */
    public function registerModule($screen)
    {
        $this->screens[] = $screen;
    }

    /**
     * @return array
     * @author Sang Nguyen
     */
    public function getScreens()
    {
        event(NoteBoxEvent::class);

        return $this->screens;
    }

    /**
     * @param string $screen
     * @param \Illuminate\Http\Request $request
     * @param Eloquent| false $object
     * @author Sang Nguyen
     */
    public function saveNote($screen, $request, $object)
    {
        if (in_array($screen, $this->getScreens()) && $request->input('note')) {
            $note = $this->noteRepository->getModel();
            $note->note = $request->input('note');
            $note->user_id = Auth::user()->getKey();
            $note->created_by = Auth::user()->getKey();
            $note->reference_type = $screen;
            $note->reference_id = $object->id;
            $this->noteRepository->createOrUpdate($note);
        }
    }

    /**
     * @param \Eloquent|false $data
     * @param string $screen
     * @return mixed
     * @author Sang Nguyen
     */
    public function deleteNote($screen, $data)
    {
        if ($data instanceof Eloquent) {
            $this->noteRepository->deleteBy([
                'reference_id' => $data->id,
                'reference_type' => $screen,
            ]);
            return true;
        }
        return false;
    }
}