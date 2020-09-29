<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\LicensePlate;

class VehicleRequest extends FormRequest
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
            'brand'     => 'required',
            'model'     => 'required',
            'placa'     => ['required', new LicensePlate],
            'year'      => 'required|min:4|max:4|string',
            'situacao'  => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'brand.required'    => 'Por favor informe a marca do veículo.',
            'model.required'    => 'Por favor informe o modelo do veículo.',
            'placa.required'    => 'Por favor informe a placa do veículo.',
            'year.required'     => 'Por favor informe o ano do veículo.',
            'year.min'          => 'O ano não pode ser menor do que 4 digitos',
            'year.max'          => 'O ano não pode ser maior do que 4 digitos',
            'year.numeric'      => 'O campo deve conter apenas números no padrão YYYY',
            'situacao.required' => 'Por favor informe a situação do veículo.',
        ];
    }
}
