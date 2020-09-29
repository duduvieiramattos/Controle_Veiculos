<?php

namespace App\Http\Controllers;
use DB;
use \App\Solicitacao;
use Illuminate\Http\Request;

use App\Http\Requests\SolicitacaoRequest;


class SolicitacaoController extends Controller
{
  private $solicitacao;

  public function __construct(Solicitacao $solicitacao)
  {
    $this->solicitacoes = $solicitacao;
    $this->solicitacao = $solicitacao;
    $this->middleware('auth');
  }
  //-------------------- Adicionar Solicitacao--------------------//
  public function get_add_solicitacao(Request $field)
  {
    return view('solicitacao/add_solicitacao');
  }

  public function post_add_solicitacao(SolicitacaoRequest $info)
  {
    $solicitacao = $this->solicitacao->addSolicitacao($info);
    return redirect()->route('solicitacoes')->with('message', 'Solicitação adicionada com sucesso!');;
  }
  //------------------------------------------------------------//
  //---------------- Listar Solicitacao Específico -----------------//
  public function get_list_solicitacao()
  {
    return list_solicitacoes();
  }

  public function post_list_solicitacao(Request $field)
  {
    if(is_null($field['namesolicitante'])) {
      $solicitacoes = $this->solicitacoes->getSolicitacoes();
    } else {
      $solicitacoes = $this->solicitacao->getsolicitacao($field);
    }
      return view('solicitacao/list_solicitacao', compact('solicitacoes'));
  }


  //--------------------- Listar Solicitacao----------------------//
  public function list_solicitacoes()
  {
    $solicitacoes = $this->solicitacoes->get();
    return view('solicitacao/list_solicitacao', compact('solicitacoes'));
  }
  //------------------------------------------------------------//



 //-------------------- Editar Solicitacao --------------------//
    public function get_edit_solicitacao($id)
  {
    $solicitacao = $this->solicitacao->find($id);

    return view('solicitacao/edit_solicitacao', compact('solicitacao'));
  }

  public function post_edit_solicitacao(SolicitacaoRequest $info, $id)
  {
    $solicitacao = $this->solicitacao->find($id);
    $solicitacao->namesolicitante =  $info['namesolicitante'];
    $solicitacao->nameramal = $info['nameramal'];
    $solicitacao->nameroteiro = $info['nameroteiro'];
    $solicitacao->namefinalidade = $info['namefinalidade'];
    $solicitacao->datasaida = $info['datasaida'];
    $solicitacao->horasaida = $info['horasaida'];
    $solicitacao->dataretorno = $info['dataretorno'];
    $solicitacao->horaretorno =$info['horaretorno'];
    $solicitacao->autenticacao = $info['autenticacao'];
    $solicitacao->nameusuario = $info['nameusuario'];
    $solicitacao->save();
    return redirect()->route('solicitacoes')->with('message', 'Solicitação alterada com sucesso!');;;
  }
  //-------------------- Deletar Solicitação --------------------//

  public function delete_solicitacao($id) {
  			$solicitacao = $this->solicitacao->find($id);
  			$solicitacao->delete();
  			return redirect()->route('solicitacoes')->with('message', 'Solicitação excluído com sucesso!');
  	}


}
