<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizationRequest extends FormRequest
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
            'почта'=>'required|exists:my__users,email',
        ];
    }

    public function messages()
    {
        return [
            'почта.exists'=>'Данная почта ещё не зарегестрирована!',
            'почта.required'=>'Пожалуйста, укажите почту!'

        ];
    }
}
