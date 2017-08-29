<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'name'          => 'required|min:3|max:150',
            'number'        => 'required|numeric',
            'category'      => 'required',
            'description'   => 'min:3|max:1000',
        ];
    }
    
    public function messages() {
        return [
            'name.required'     => 'O campo NOME é de preechimento obrigatorio!',
            'number.required'   => 'O campo NUMERO é de preechimento obrigatorio!',
            'number.numeric'    => 'O campo NUMERO precisa ser apenas NUMEROS!',
            'category.required' => 'O campo CATEGORIA é de preenchimento obrigatorio!'
        ];
    }
}
