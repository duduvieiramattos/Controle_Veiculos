<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitacaoRequest extends FormRequest
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
            'namesolicitante'   => 'required',
            'nameramal'         => 'required|min:4',
            'nameroteiro'       => 'required',
            'namefinalidade'    => 'required',
            'datasaida'         => 'required',
            'horasaida'         => 'required',
            'dataretorno'       => 'required',
            'horaretorno'       => 'required',
            'autenticacao'      => 'required',
            'nameusuario'       => 'required',
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
            'namesolicitante.required' => 'Por favor informe o setor solicitante.',
            'nameramal.required'       => 'Por favor informe o ramal do seu setor.',
            'nameramal.min'            => 'O ramal deve conter no mínimo 4 dígitos',
            'nameroteiro.required'     => 'Por favor informe o roteiro.',
            'namefinalidade.required'  => 'Por favor informe a finalidade desta solicitação.',
            'datasaida.required'       => 'Por favor informe a data de saída.',
            'horasaida.required'       => 'Por favor informe o horário de saída.',
            'dataretorno.required'     => 'Por favor informe a data de retorno.',
            'horaretorno.required'     => 'Por favor informe o horário de retorno.',
            'nameusuario.required'     => 'Por favor informe o mome do solicitante ou paciente.',
            'autenticacao.required'    => 'Por favor informe o status da solicitação.',
        ];
    }
}
