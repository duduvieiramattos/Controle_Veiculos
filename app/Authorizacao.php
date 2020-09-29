<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\authorizacao;

class Authorizacao extends Model
{
  protected $table = "authorizacaos";
  protected $fillable = ['placa'];


  public function getAuthorizacao($field)
  {
    if(!is_null($field['placa'])) {
      $authorizacao = Authorizacao::where('placa', 'LIKE', '%'.$field['placa'].'%')
                        ->get();
    }
    return $authorizacao;
  }


  public function getAuthorizacoes()
  {
    $authorizacoes = Authorizacao::all();
    return $authorizacoes;
  }

  public function addAuthorizacao($field)
  {
    $authorizacao= new Authorizacao();
    $authorizacao->namemotorista = $field['namemotorista'];
    $authorizacao->model = $field['model'];
    $authorizacao->placa = $field['placa'];
    $authorizacao->aprovacao = $field['aprovacao'];
    $authorizacao->datasaida = $field['datasaida'];
    $authorizacao->horasaida = $field['horasaida'];
    $authorizacao->dataretorno = $field['dataretorno'];
    $authorizacao->horaretorno = $field['horaretorno'];
    $authorizacao->kminicial = $field['kminicial'];
    $authorizacao->kmfinal = $field['kmfinal'];
    $authorizacao->observ = $field['observ'];
    $authorizacao->autorizacao = $field['autorizacao'];
    $authorizacao->data = $field['data'];
    $authorizacao->cientemot = $field['cientemot'];
    $authorizacao->datacient = $field['datacient'];
    $authorizacao->statusveiculo = $field['statusveiculo'];

    $authorizacao->save();

  }
}
