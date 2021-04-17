<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class GetUsersRequest extends FormRequest
{
    protected $rules = [];
    protected $messages = [];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->rules['items_per_page'] = ['numeric', 'min:1', 'max:100'];

        return $this->rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        $this->messages['items_per_page.numeric'] = 'Itens por página está com o formato inválido.';
        $this->messages['items_per_page.min'] = 'Mínimo 1 caracteres.';
        $this->messages['items_per_page.max'] = 'Máximo 100 caracteres.';

        return $this->messages;
    }

}
