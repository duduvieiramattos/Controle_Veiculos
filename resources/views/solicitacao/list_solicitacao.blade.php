@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Solicitações</h1>
<div class="table-responsive">
<div class="ls-box ">
  <div class="box-header">
    <h5 class="ls-title">Listar Solicitação</h5>
    <form method="post" action="{{ route('solicitacao.list') }}" class="form form-inline">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
      <fieldset>
        <label class="ls-label col-md-12">
          <input type="text" name="namesolicitante" placeholder="Setor Solicitante" >
        </label>

      </fieldset>
       <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form >
  </div>

  <table class="ls-table ls-table-striped ls-bg-header ">
    <thead>
      <tr>
        <th>Setor Solicitante</th>
        <th>Ramal</th>
        <th>Roteiro</th>
        <th>Finalidade</th>
        <th>Data Saida</th>
        <th>Hora Saida</th>
        <th>Data Retorno</th>
        <th>Hora Retorno</th>
        <th>Status da Solicitação</th>
        <th>Nome dos Pacientes</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($solicitacoes as $solicitacao)
      <tr>
        <td>{{ $solicitacao->namesolicitante }}</td>
        <td>{{ $solicitacao->nameramal }}</td>
        <td>{{ $solicitacao->nameroteiro }}</td>
        <td>{{ $solicitacao->namefinalidade }}</td>
        <td>{{ $solicitacao->datasaida }}</td>
        <td>{{ $solicitacao->horasaida }}</td>
        <td>{{ $solicitacao->dataretorno}}</td>
        <td>{{ $solicitacao->horaretorno }}</td>
        <td>{{ $solicitacao->autenticacao }}</td>
        <td>{{ $solicitacao->nameusuario }}</td>
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-ico-edit-admin"></a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{ route('solicitacao.edit', $solicitacao->id) }}">Alterar</a></li>
              <li><a href="{{ route('solicitacao.delete', $solicitacao->id) }}">Apagar</a></li>
              <li><a href="{{ route('pdf', $solicitacao->id) }}">Imprimir</a></li>
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>
</div>
@stop
