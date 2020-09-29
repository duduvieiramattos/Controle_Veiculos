@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Autorização de saidas</h1>
<div class="ls-box">

  <h5 class="ls-title-5">Autorização de uso de veiculos oficiais:</h5>
  <form method="POST" action="{{ route('authorizacao.postAdd') }}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-5 @error('namemotorista') ls-error @enderror">
            <b class="ls-label-text">Motorista</b>
            <input type="text" class="form-control" name="namemotorista" value="{{old('namemotorista')}}" >

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
            <input type="text" class="form-control" name="aprovacao" value="{{old('aprovacao')}}" >

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
            <input type="text" class="form-control" name="model" value="{{old('model')}}" >

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
            <input type="text" class="form-control" name="placa" value="{{old('placa')}}" >

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
            <input type="date" class="form-control" name="datasaida" placeholder="Data" value="{{old('datasaida')}}" >

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
            <input type="time" class="form-control" name="horasaida" placeholder="Hora" value="{{old('horasaida')}}" >

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
            <input type="date" class="form-control" name="dataretorno" placeholder="Data" value="{{old('dataretorno')}}" >

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
            <input type="time" class="form-control" name="horaretorno" placeholder="Hora" value="{{old('horaretorno')}}" >

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
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="kminicial" maxlength="6" autocomplete="off" value="{{old('kminicial')}}" >

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
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" name="kmfinal" maxlength="6" autocomplete="off" value="{{old('kmfinal')}}" >

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
          <input type="text" class="form-control" name="observ" value="{{old('observ')}}" >

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
          <input type="text" class="form-control" name="statusveiculo" value="{{old('statusveiculo')}}" >

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
          <input type="text" class="form-control" name="cientemot" value="{{old('cientemot')}}" >

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
          <input type="date" class="form-control" name="datacient" placeholder="Data" value="{{old('datacient')}}" >

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
          <input type="text" class="form-control" name="autorizacao" value="{{old('autorizacao')}}" >

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
          <input type="date" class="form-control" name="data" placeholder="Data" value="{{old('data')}}" >

          @error('data')
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