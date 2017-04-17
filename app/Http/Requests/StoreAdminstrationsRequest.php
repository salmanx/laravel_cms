<?php

namespace Rocket\Http\Requests;

use Rocket\Http\Requests\Request;

class StoreAdminstrationsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'status'     => 'required',
            'slug'    => 'required',
            'body' => 'required',
            'image' => 'required'           
        ];
    }
}
