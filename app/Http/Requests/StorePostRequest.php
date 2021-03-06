<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'=> 'required|min:5|unique:posts',
            'description'=> ['required','min:10'],
        ];
    }
    public function messages()
{
    return [
        'title.unique' => 'The Title has been enter before',
        'title.required' => 'A title must be required',
        'description.required' => 'A description must be required',
    ];
}
}
