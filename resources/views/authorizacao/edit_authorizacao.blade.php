@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Autorização de saidas</h1>
<div class="ls-box">

  <h5 class="ls-title-5">Editar Autorização</h5>
  <form method="POST" action="{{route('authorizacao.edit',$authorizacao->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('namemotorista') ls-error @enderror">
            <b class="ls-label-text">Motorista</b>
            <input value="{{$authorizacao->namemotorista }}" type="text" class="form-control" name="namemotorista">

            @error('namemotorista')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('aprovacao') ls-error @enderror">
            <b class="ls-label-text">Status da Solicitação</b>
            <input value="{{ $authorizacao->aprovacao }}" type="text" class="form-control" name="aprovacao">

            @error('aprovacao')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
        <div class="form-group col-md-6 @error('model') ls-error @enderror">
          <label class="ls-label col-md-5">
            <b class="ls-label-text">Veiculo</b>
            <input value="{{ $authorizacao->model }}" type="text" class="form-control" name="model">

            @error('model')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('placa') ls-error @enderror">
            <b class="ls-label-text">Placa</b>
            <input value="{{ $authorizacao->placa }}" type="text" class="form-control" name="placa">

            @error('placa')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
      </div>
      <div class="form-row">
        <h5 class="ls-title-6">Saida</h5>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('datasaida') ls-error @enderror">
            <b class="ls-label-text">Data</b>
            <input value="{{ $authorizacao->datasaida }}" type="date" class="form-control" name="datasaida" placeholder="Data">

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
            <input value="{{ $authorizacao->horasaida }}" type="time" class="form-control" name="horasaida" placeholder="Hora">

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
        <h5 class="ls-title-6">Retorno</h5>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('dataretorno') ls-error @enderror">
            <b class="ls-label-text">Data</b>
            <input value="{{ $authorizacao->dataretorno }}" type="date" class="form-control" name="dataretorno" placeholder="Data">

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
            <input value="{{ $authorizacao->horaretorno }}" type="time" class="form-control" name="horaretorno" placeholder="Hora">

            @error('horaretorno')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('kminicial') ls-error @enderror">
            <b class="ls-label-text">Quilometragem Atual</b>
            <input value="{{ $authorizacao->kminicial }}" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="kminicial" maxlength="6" autocomplete="off">

            @error('kminicial')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('kmfinal') ls-error @enderror">
            <b class="ls-label-text">Quilometragem Final</b>
            <input value="{{ $authorizacao->kmfinal }}" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="kmfinal" maxlength="6" autocomplete="off">

            @error('kmfinal')
            <div class="ls-help-message">
              {{$message}}
            </div>
            @enderror

          </label>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('observ') ls-error @enderror">
          <b class="ls-label-text">Obeservação</b>
          <input value="{{$authorizacao->observ }}" type="text" class="form-control" name="observ">

          @error('observ')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('statusveiculo') ls-error @enderror">
          <b class="ls-label-text">Situação do veiculo</b>
          <input value="{{$authorizacao->statusveiculo }}" type="text" class="form-control" name="statusveiculo">

          @error('statusveiculo')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('cientemot') ls-error @enderror">
          <b class="ls-label-text">Motorista Ciente</b>
          <input value="{{$authorizacao->cientemot }}" type="text" class="form-control" name="cientemot">

          @error('cientemot')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('datacient') ls-error @enderror">
          <b class="ls-label-text">Data</b>
          <input value="{{$authorizacao->datacient }}" type="date" class="form-control" name="datacient" placeholder="Data">

          @error('datacient')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('autorizacao') ls-error @enderror">
          <b class="ls-label-text">Autorizado por</b>
          <input value="{{$authorizacao->autorizacao }}" type="text" class="form-control" name="autorizacao">

          @error('autorizacao')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('data') ls-error @enderror">
          <b class="ls-label-text">Data</b>
          <input value="{{$authorizacao->data }}" type="date" class="form-control" name="data" placeholder="Data">

          @error('data')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>

    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
      <a href="{{ route('authorizacoes') }}" class="ls-btn-danger">Cancelar</a>
    </div>
  </form>
</div>

@stop