@extends('layouts.application')

    @section('content')
    <h1 class="ls-title-intro ls-ico-home">Bem vindo ao Painel de Controle de Veiculos</h1>

    <div class="ls-box ls-board-box">
      <header class="ls-info-header">
        <h2 class="ls-title-3">Informações do Sistema</h2>

      </header>

        <div class="col-sm-6 col-md-3">
          <div class="ls-box">
            <div class="ls-box-head">
              <h6 class="ls-title-4">VEICULOS CADASTRADOS</h6>
            </div>
            <div class="ls-box-body">
              <strong>{{ App\Vehicle::count() }}</strong>
              <small>Veiculos</small>
            </div>
            <div class="ls-box-footer">
              <a href="{{ route('vehicles') }}" aria-label="Buscar Veiculos" class="ls-btn ls-btn-sm" title="Buscar Veiculo">Buscar Veiculo</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="ls-box">
            <div class="ls-box-head">
              <h6 class="ls-title-4">Solicitações Efetuadas</h6>
            </div>
            <div class="ls-box-body">
              <strong>{{ App\Solicitacao::count() }}</strong>
              <small>Solicitações</small>
            </div>
            <div class="ls-box-footer">
              <a href="{{ route('solicitacoes') }}" aria-label="Buscar Solicitação" class="ls-btn ls-btn-sm" title="Buscar Solicitação">Buscar Solicitação</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="ls-box">
            <div class="ls-box-head">
              <h6 class="ls-title-4">Autorizações Efetuadas</h6>
            </div>
            <div class="ls-box-body">
              <strong>{{ App\Authorizacao::count() }}</strong>
              <small>Autorizações</small>
            </div>
            <div class="ls-box-footer">
              <a href="{{ route('authorizacoes') }}" aria-label="Buscar Autorização" class="ls-btn ls-btn-sm" title="Buscar Autorização">Buscar Autorização</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </div>

    @endsection
