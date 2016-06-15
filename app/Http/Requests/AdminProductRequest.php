<?php

namespace CodeDelivery\Http\Requests;

use CodeDelivery\Http\Requests\Request;

class AdminProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //Se a request esta sendo permitida ou não
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
            //As regras que devem ser seguida no processo, ou seja, os campos que enviar, pode-se escolher como validar
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];
    }
}
