<?php

namespace Rocket\Http\Requests;

use Rocket\Http\Requests\Request;

class DeleteuserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if($this->route('users') == auth()->user()->id) {
            return false;
        }
        
        return true;   
    }

    public function forbiddenResponse()
    {
        return redirect()->back()->withErrors([
            'error' => 'You are unable to delete yourself'
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
