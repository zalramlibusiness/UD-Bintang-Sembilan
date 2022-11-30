<?php

namespace Modules\Master\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Master\Models\WoodType;

class CreateWoodTypeRequest extends FormRequest
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
        return WoodType::$rules;
    }
}
