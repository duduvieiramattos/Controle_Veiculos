<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\solicitacao;

class Solicitacao extends Model{
  protected $table = "solicitacoes";
  protected $fillable = ['namesolicitante'];

  public function getSolicitacao($field)
  {
    if(!is_null($field['namesolicitante'])) {
      $solicitacao = Solicitacao::where('namesolicitante', 'LIKE', '%'.$field['namesolicitante'].'%')
                        ->get();
    }
    return $solicitacao;
  }

  public function getSolicitacoes()
  {
    $solicitacoes = Solicitacao::all();
    return $solicitacoes;
  }

  public function addSolicitacao($field)
  {
    $solicitacao = new Solicitacao();
    $solicitacao->namesolicitante = $field['namesolicitante'];
    $solicitacao->nameramal = $field['nameramal'];
    $solicitacao->nameroteiro = $field['nameroteiro'];
    $solicitacao->namefinalidade = $field['namefinalidade'];
    $solicitacao->datasaida = $field['datasaida'];
    $solicitacao->horasaida = $field['horasaida'];
    $solicitacao->dataretorno = $field['dataretorno'];
    $solicitacao->horaretorno = $field['horaretorno'];
    $solicitacao->autenticacao = $field['autenticacao'];
    $solicitacao->nameusuario = $field['nameusuario'];

    $solicitacao->save();


  }
}
