@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Adicionar Veiculo</h1>
<div class="ls-box">
  <hr>
  <h5 class="ls-title-5">Cadastrar Veículo:</h5>
  <form method="POST" action="{{ route('vehicle.postAdd') }}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>

      <label class="ls-label col-md-3 @error('brand') ls-error @enderror">
        <b class="ls-label-text">Marca:</b>
        <input type="text" maxlength="20" name="brand" placeholder="Marca do Veículo" value="{{old('brand')}}">

        @error('brand')
        <div class="ls-help-message">
          {{$message}}
        </div>
        @enderror

      </label>
      <label class="ls-label col-md-3 @error('model') ls-error @enderror">
        <b class="ls-label-text">Modelo:</b>
        <input class="ls-no-spin" type="text" name="model" placeholder="Modelo" value="{{old('model')}}">

        @error('model')
        <div class="ls-help-message">
          {{$message}}
        </div>
        @enderror

      </label>

      <label class="ls-label col-md-3 @error('placa') ls-error @enderror">
        <b class="ls-label-text">Placa:</b>
        <input type="text" name="placa" placeholder="Placa" class="ls-no-spin form-control" value="{{old('placa')}}">

        @error('placa')
        <div class="ls-help-message">
          {{$message}}
        </div>
        @enderror

      </label>

      <label class="ls-label col-md-3 @error('year') ls-error @enderror">
        <b class="ls-label-text">Ano:</b>
        <input class="ls-mask-date" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="year" placeholder="Ano" value="{{old('year')}}" maxlength="4" autocomplete="off">

        @error('year')
        <div class="ls-help-message">
          {{$message}}
        </div>
        @enderror

      </label>

      <label class="ls-label col-md-3 @error('situacao') ls-error @enderror">
        <b class="ls-label-text">Situação do veiculo</b>
        <input class="ls-no-spin" type="text" name="situacao" placeholder="Situação do veiculo" value="{{old('situacao')}}">

        @error('situacao')
        <div class="ls-help-message">
          {{$message}}
        </div>
        @enderror

      </label>

    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
      <input class="ls-btn-danger" type="reset" value="Limpar">
    </div>
  </form>

</div>


@stop