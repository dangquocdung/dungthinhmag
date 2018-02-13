<?php

namespace Botble\Base\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class AjaxResponse implements Responsable
{
    /**
     * @var bool
     */
    protected $error = false;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param $error
     * @return $this
     * @author Sang Nguyen
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @param $message
     * @return $this
     * @author Sang Nguyen
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param $data
     * @return $this
     * @author Sang Nguyen
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function toResponse($request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()
                ->json([
                    'error' => $this->error,
                    'data' => $this->data,
                    'message' => $this->message,
                ]);
        }

        if ($this->error) {
            return redirect()->back()->with('error_msg', $this->message);
        }
        return redirect()->back()->with('success_msg', $this->message);
    }
}