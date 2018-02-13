<?php

namespace Botble\SimpleSlider\Http\Requests;

use Botble\Support\Http\Requests\Request;

class SimpleSliderRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Sang Nguyen
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'order' => 'required|integer|min:0',
        ];
    }
}
