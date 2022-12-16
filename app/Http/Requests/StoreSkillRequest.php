<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSkillRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'address' => ['required'],
            'contact_no' => ['required', 'digits:11'],
            'age' => ['required'],
            'department' => ['required'],
            'slug' => ['required', Rule::unique('skills')->ignore($this->skill)]
        ];
    }
}
