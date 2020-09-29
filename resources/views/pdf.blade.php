
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
       <h2>Solicitação de Veiculos</h2>
   </div>
   <div id="corpo">

  <body>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDF</title>
   </head>
   @foreach ($solicitacao as $solicitacao)

   <b><font size="5" color="red">Setor Solicitante:</font></b>
   <b><font size="4">{{ $solicitacao->namesolicitante }}</font></b>
   <br>
 <b><font size="5" color="red">Ramal:</font></b>
   <b><font size="4">{{ $solicitacao->nameramal }}</font></b>
   <br>
 <b><font size="5" color="red">Roteiro:</font></b>
   <b><font size="4"> {{$solicitacao->nameroteiro}}</font> </b>
   <br>
 <b><font size="5" color="red">Finalidade:</font></b>
   <b><font size="4"> {{$solicitacao->namefinalidade}}</font></b>
   <br>
 <b><font size="5" color="red">Data Saida:</font></b>
   <b><font size="4">{{$solicitacao->datasaida}}</font> </b>
   <br>
 <b><font size="5" color="red">Hora Saida:</font></b>
   <b><font size="4">{{ $solicitacao->horasaida }}</font></b>
   <br>
 <b><font size="5" color="red">Data Retorno:</font></b>
   <b><font size="4">{{ $solicitacao->dataretorno}}</font></b>
   <br>
 <b><font size="5" color="red">Hora Retorno:</font></b>
   <b><font size="4">{{ $solicitacao->horaretorno }}</font></b>
   <br>
 <b><font size="5" color="red">Status da Solicitação:</font></b>
   <b><font size="4">{{ $solicitacao->autenticacao }}</font></b>
   <br>
 <b><font size="5" color="red">Nome dos Pacientes:</font></b>
   <b><font size="4">{{$solicitacao->nameusuario}}</font></b>
   <br>
@endforeach
      </div>
      <div id="footer">
          <p class="page">Página </p>
      </div>
    </body>
</html>
