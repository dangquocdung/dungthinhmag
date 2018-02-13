<?php

namespace Botble\ACL\Http\Requests;

use Botble\Support\Http\Requests\Request;

class InviteRequest extends Request
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
            'first_name' => 'required|max:60|min:2',
            'last_name' => 'required|max:60|min:2',
            'email' => 'required|max:60|min:6|email',
            'role' => 'required',
        ];
    }
}
