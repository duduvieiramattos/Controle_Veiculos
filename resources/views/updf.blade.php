
<!DOCTYPE html>
<html lang="en">

 <head>
   <style type="text/css">

  @page {
       margin: 150px 50px 80px 50px;
   }
   #head{
       background-image: url("fad.jpg");
       background-repeat: no-repeat;
       font-size: 25px;
       text-align: center;
       height: 110px;
       width: 100%;
       position: fixed;
       top: -100px;
       left: 0;
       right: 0;
       margin: auto;
   }
   #corpo{
       width: 600px;
       position: relative;
       margin: auto;
   }

   #footer {
       position: fixed;
       bottom: 0;
       width: 100%;
       text-align: right;
       border-top: 1px solid gray;
   }
   #footer .page:after{
       content: counter(page);

   }

   </style>

   <div id="head">
      <img src="{{public_path ('images/logo.png')}}" alt="logo" height="90px"/>
      <img src="{{public_path ('images/logo3.png')}}" alt="logo" height="90px"/>
  </div>

  <style>
    div.a {
    text-align: center;
    }

  </style>
   <div class= "a">
       <h2>Autorização de Solicitação</h2>
   </div>
   <div id="corpo">

  <body>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDF</title>
   </head>

      @foreach ($authorizacao as $authorizacao)

      <b><font size="5" color="red">Motorista:</font></b>
      <b><font size="4">{{ $authorizacao->namemotorista }}</font></b>
      <br>
      <b><font size="5" color="red">Status da Solicitação:</font></b>
      <b><font size="4">{{ $authorizacao->aprovacao }}</font></b>
      <br>
      <b><font size="5" color="red">Veiculo:</font></b>
      <b><font size="4">{{ $authorizacao->model }}</font></b>
      <br>
      <b><font size="5" color="red">Placa:</font></b>
      <b><font size="4">{{ $authorizacao->placa }}</font></b>
      <br>
      <b><font size="5" color="red">Data Saida:</font></b>
      <b><font size="4">{{ $authorizacao->datasaida }}</font></b>
      <br>
      <b><font size="5" color="red">Hora Saida:</font></b>
      <b><font size="4">{{ $authorizacao->horasaida }}</font></b>
      <br>
      <b><font size="5" color="red">Data Retorno:</font></b>
      <b><font size="4">{{ $authorizacao->dataretorno }}</font></b>
      <br>
      <b><font size="5" color="red">Hora Retorno:</font></b>
      <b><font size="4">{{ $authorizacao->horaretorno }}</font></b>
      <br>
      <b><font size="5" color="red">Quilometragem Atual:</font></b>
      <b><font size="4">{{ $authorizacao->kminicial }}</font></b>
      <br>
      <b><font size="5" color="red">Quilometragem Final:</font></b>
      <b><font size="4">{{ $authorizacao->kmfinal }}</font></b>
      <br>
      <b><font size="5" color="red">Obeservação:</font></b>
      <b><font size="4">{{ $authorizacao->observ }}</font></b>
      <br>
      <b><font size="5" color="red">Situação do veiculo:</font></b>
      <b><font size="4">{{ $authorizacao->statusveiculo }}</font></b>
      <br>
      <b><font size="5" color="red">Motorista Ciente:</font></b>
      <b><font size="4">{{ $authorizacao->cientemot }}</font></b>
      <br>
      <b><font size="5" color="red">Data:</font></b>
      <b><font size="4">{{ $authorizacao->datacient }}</font></b>
      <br>
      <b><font size="5" color="red">Autorizado por:</font></b>
      <b><font size="4">{{ $authorizacao->autorizacao }}</font></b>
      <br>
      <b><font size="5" color="red">Data:</font></b>
      <b><font size="4">{{ $authorizacao->data }}</font></b>

       @endforeach

      <div id="footer">
          <p class="page">Página </p>
      </div>
    </body>
</html>
