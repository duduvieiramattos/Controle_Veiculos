@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Editar Solicitação</h1>
<div class="ls-box">
  <form method="Post" action="{{route('solicitacao.edit',$solicitacao->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-12 @error('namesolicitante') ls-error @enderror">
            <b class="ls-label-text">Setor Solicitante</b>
            <input value="{{ $solicitacao->namesolicitante }}" type="text" class="form-control" name="namesolicitante" placeholder="Setor Solicitante">

            @error('namesolicitante')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>

        <div class="form-group col-md-6">
          <label class="ls-label col-md-12 @error('nameramal') ls-error @enderror">
            <b class="ls-label-text">Ramal</b>
            <input value="{{ $solicitacao->nameramal }}" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="nameramal" placeholder="Ramal" maxlength="5" autocomplete="off">

            @error('nameramal')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>

      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-12 @error('nameroteiro') ls-error @enderror">
            <b class="ls-label-text">Roteiro</b>
            <input value="{{ $solicitacao->nameroteiro }}" type="text" class="form-control" name="nameroteiro" placeholder="Roteiro">

            @error('nameroteiro')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>

        <div class="form-group col-md-6">
          <label class="ls-label col-md-12 @error('namefinalidade') ls-error @enderror">
            <b class="ls-label-text">Finalidade</b>
            <input value="{{ $solicitacao->namefinalidade }}" type="text" class="form-control" name="namefinalidade" placeholder="Finalidade">

            @error('namefinalidade')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
          <br>
        </div>

      </div>

      <h5 style="margin-left: 20px;" class="ls-title-5">Previsão de Utilização do Veiculo:</h5>
      <hr>

      <div class="form-row">
        <h5 style="margin-left: 20px;" class="ls-title-6">Saida</h5>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('datasaida') ls-error @enderror">
            <b class="ls-label-text">Data</b>
            <input value="{{ $solicitacao->datasaida }}" type="date" class="form-control" name="datasaida" placeholder="Data">

            @error('datasaida')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('horasaida') ls-error @enderror">
            <b class="ls-label-text">Hora</b>
            <input value="{{ $solicitacao->horasaida }}" type="time" class="form-control" name="horasaida" placeholder="Hora">

            @error('horasaida')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
      </div>
      <br>
      <div class="form-row">
        <h5 style="margin-left: 20px;" class="ls-title-6">Retorno</h5>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('dataretorno') ls-error @enderror">
            <b class="ls-label-text">Data</b>
            <input value="{{ $solicitacao->dataretorno }}" type="date" class="form-control" name="dataretorno" placeholder="Data">

            @error('dataretorno')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>

        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('horaretorno') ls-error @enderror">
            <b class="ls-label-text">Hora</b>
            <input value="{{ $solicitacao->horaretorno }}" type="time" class="form-control" name="horaretorno" placeholder="Hora">

            @error('horaretorno')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>

      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-12 @error('nameusuario') ls-error @enderror">
          <b class="ls-label-text">Nome dos Usuários</b>
          <input value="{{ $solicitacao->nameusuario }}" type="text" class="form-control" name="nameusuario" placeholder="Nome dos Usuários">

          @error('nameusuario')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>

      <div class="form-group col-md-6">
        <label class="ls-label col-md-6 @error('autenticacao') ls-error @enderror">
          <b class="ls-label-text">Status da Solicitação</b>
          <input value="{{ $solicitacao->autenticacao }}" type="text" class="form-control" name="autenticacao">

          @error('autenticacao')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>

    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
      <a href="{{ route('solicitacoes') }}" class="ls-btn-danger">Cancelar</a>
    </div>
  </form>
</div>
@stop