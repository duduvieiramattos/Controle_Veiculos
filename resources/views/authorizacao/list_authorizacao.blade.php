@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Autorizações</h1>
<div class="table-responsive">
<div class="ls-box">

  <div class="box-header">
    <h5 class="ls-title">Listar Autorização</h5>
    <form method="post" action="{{ route('authorizacao.list') }}" class="form form-inline">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
      <fieldset>
        <label class="ls-label col-md-12">
          <input type="text" name="placa" placeholder="Placa" >
        </label>
      </fieldset>
       <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form >
  </div>
  <table class="ls-table ls-table-striped ls-bg-header">

    <thead>
      <tr>
        <th>Motorista</th>
        <th>Status da Solicitação</th>
        <th >Veiculo</th>
        <th>Placa</th>
        <th>Data Saida</th>
        <th>Hora Saida</th>
        <th>Data Retorno</th>
        <th>Hora Retorno</th>
        <th >Quilometragem Atual</th>
        <th>Quilometragem Final</th>
        <th>Obeservação</th>
        <th>Situação do veiculo</th>
        <th>Motorista Ciente</th>
        <th >Data</th>
        <th>Autorizado por</th>
        <th>Data</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
  </div>
    @foreach ($authorizacoes as $authorizacao)
      <tr>
        <td>{{ $authorizacao->namemotorista }}</td>
        <td >{{ $authorizacao->aprovacao }}</td>
        <td>{{ $authorizacao->model }}</td>
        <td>{{ $authorizacao->placa}}</td>
        <td>{{ $authorizacao->datasaida }}</td>
        <td>{{ $authorizacao->horasaida }}</td>
        <td >{{ $authorizacao->dataretorno }}</td>
        <td>{{ $authorizacao->horaretorno }}</td>
        <td>{{ $authorizacao->kminicial}}</td>
        <td>{{ $authorizacao->kmfinal }}</td>
        <td>{{ $authorizacao->observ }}</td>
        <td >{{ $authorizacao->statusveiculo }}</td>
        <td>{{ $authorizacao->cientemot }}</td>
        <td>{{ $authorizacao->datacient}}</td>
        <td>{{ $authorizacao->autorizacao }}</td>
        <td>{{ $authorizacao->data }}</td>
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-ico-edit-admin"></a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{ route('authorizacao.edit', $authorizacao->id) }}">Alterar</a></li>
              <li><a href="{{ route('authorizacao.delete', $authorizacao->id) }}">Apagar</a></li>
              <li><a href="{{ route('updf', $authorizacao->id) }}">Imprimir</a></li>

            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@stop
