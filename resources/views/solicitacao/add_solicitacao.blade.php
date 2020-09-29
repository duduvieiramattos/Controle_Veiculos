@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Solicitar Veiculo</h1>
<div class="ls-box">

  <h5 class="ls-title-5">Solicitação de uso de veiculos oficiais:</h5>
  <form method="POST" action="{{ route('solicitacao.postAdd') }}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-12 @error('namesolicitante') ls-error @enderror">
            <b class="ls-label-text">Setor Solicitante</b>
            <input type="text" class="form-control" name="namesolicitante" placeholder="Setor Solicitante" value="{{old('namesolicitante')}}">

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
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="nameramal" placeholder="Ramal" value="{{old('nameramal')}}" maxlength="5" autocomplete="off">

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
            <input type="text" class="form-control" name="nameroteiro" placeholder="Roteiro" value="{{old('nameroteiro')}}">

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
            <input type="text" class="form-control" name="namefinalidade" placeholder="Finalidade" value="{{old('namefinalidade')}}">

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
            <input type="date" class="form-control" name="datasaida" placeholder="Data" value="{{old('datasaida')}}">

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
            <input type="time" class="form-control" name="horasaida" placeholder="Hora" value="{{old('horasaida')}}">

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
            <input type="date" class="form-control" name="dataretorno" placeholder="Data" value="{{old('dataretorno')}}">

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
            <input type="time" class="form-control" name="horaretorno" placeholder="Hora" value="{{old('horaretorno')}}">

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
          <b class="ls-label-text">Nome dos Pacientes</b>
          <input type="text" class="form-control" name="nameusuario" placeholder="Nome dos Pacientes" value="{{old('nameusuario')}}">

          @error('nameusuario')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>

      <div class="form-group col-md-6">
        <label class="ls-label col-md-5 @error('autenticacao') ls-error @enderror">
          <b class="ls-label-text">Status da Solicitação</b>
          <input type="text" class="form-control" name="autenticacao" placeholder="" value="{{old('autenticacao')}}">

          @error('autenticacao')
          <div class="ls-help-message">
            {{$message}}
          </div>
          @enderror

        </label>
      </div>


    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>
</div>

@stop