<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'почта'=> 'required|email|unique:my__users,email',
            'пароль'=> 'required|same:повтор_пароль',
            'имя'=> 'required|unique:my__users,user'
        ];
    }

    public function messages()
    {
        return [
            'почта.required' => 'Поле почта является обязательным!',
            'имя.required' => 'Поле имя является обязательным!',
            'пароль.required' => 'Поле пароль является обязательным!',
            'пароль.same' => 'Повтор пароля должен совпадать с оригиналом!',
            'почта.email' => 'Почта должна быть корректной!',
            'почта.unique' => 'Почта уже зарегестрирована!',
            'имя.unique' => 'Такое имя уже занято!'
        ];
    }
}
