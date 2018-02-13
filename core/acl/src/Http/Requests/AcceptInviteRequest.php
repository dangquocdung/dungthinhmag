<?php

namespace Botble\ACL\Http\Requests;

use Botble\Support\Http\Requests\Request;

class AcceptInviteRequest extends Request
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
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'username' => 'required|min:4|max:30',
        ];
    }
}
