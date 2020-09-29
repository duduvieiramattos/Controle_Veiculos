<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\LicensePlate;

class AuthorizeRequest extends FormRequest
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
            'namemotorista'     => 'required',
            'model'             => 'required',
            'placa'             => ['required', new LicensePlate],
            'aprovacao'         => 'required',
            'datasaida'         => 'required',
            'horasaida'         => 'required',
            'dataretorno'       => 'required',
            'horaretorno'       => 'required',
            'kminicial'         => 'required',
            'kmfinal'           => 'required',
            'observ'            => 'required',
            'autorizacao'       => 'required',
            'data'              => 'required',
            'cientemot'         => 'required',
            'datacient'         => 'required',
            'statusveiculo'     => 'required',
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
            'namemotorista.required' => 'Por favor informe o nome do motorista.',
            'model.required'       => 'Por favor informe o modelo do veículo.',
            'placa.required'            => 'Por favor informe a placa do veículo',
            'aprovacao.required'     => 'Por favor informe o roteiro.',
            'datasaida.required'  => 'Por favor informe a finalidade desta solicitação.',
            'horasaida.required'       => 'Por favor informe a data de saída.',
            'dataretorno.required'       => 'Por favor informe o horário de saída.',
            'horaretorno.required'     => 'Por favor informe a data de retorno.',
            'kminicial.required'     => 'Por favor informe o horário de retorno.',
            'kmfinal.required'     => 'Por favor informe o mome do solicitante ou paciente.',
            'observ.required'    => 'Por favor informe o status da solicitação.',
            'autorizacao.required'     => 'Por favor informe a data de retorno.',
            'data.required'     => 'Por favor informe o horário de retorno.',
            'cientemot.required'     => 'Por favor informe o mome do solicitante ou paciente.',
            'datacient.required'    => 'Por favor informe o status da solicitação.',
            'statusveiculo.required'    => 'Por favor informe o status da solicitação.',
        ];
    }
}
