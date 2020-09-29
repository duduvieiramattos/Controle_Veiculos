<!DOCTYPE html>
<html class="ls-theme-green">
  <head>
    <title>HOSPITAL SÃO JOSÉ</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
  </head>
  <body>
    <div class="ls-topbar ">

   <script src="js/app.js" charset="utf-8"></script>
  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">
    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <span class="ls-name">{{ Auth::user()->name }}</span>
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="{{ route('logout') }}">Sair</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Nome do produto/marca com sidebar -->


  <h1 class="ls-brand-name">
      <div class="container-fluid" >
       <div class="form-group col-md-6" >
          <img src="{{URL::asset('images/logo.png')}}" alt="profile Pic"  width="175"  class="logo">
          
       </div>

        <div class="form-group col-md-6 ">
          <a >
           <small class="margen" >CONTROLE DE VEICULOS</small>
           <h6 class="hospital">HOSPITAL SÃO JOSÉ</h6>
          </a>
        </div>
     </div>
   </h1>
</div>

    <aside class="ls-sidebar">
  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev">
        <span class="ls-text">Voltar à lista de controle</span></a>

      <nav class="ls-menu">
        <ul>
           <li><a href="/" class="ls-ico-home" title="Pagina Inicial">Pagina Inicial</a></li>

            <li>
              <a href="#" class="ls-ico-dashboard" title="Veiculo">Veiculo</a>
              <ul>
                <li><a href="/vehicle/add">Cadastrar</a></li>
                <li><a href="{{ route('vehicles') }}">Buscar</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="ls-ico-panel-backup" title="Solicitacao">Solicitação de veiculos</a>
              <ul>
                  <li><a href="/solicitacao/add">Cadastrar</a></li>
                <li><a href="{{ route('solicitacoes') }}">Buscar</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="ls-ico-panel-backup" title="Autorizacao">Autorização da Solicitação</a>
              <ul>
                  <li><a href="/authorizacao/add">Cadastrar</a></li>
                <li><a href="{{ route('authorizacoes') }}">Buscar</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="ls-ico-panel-backup" title="Informacao">Informações </a>
              <ul>
                  <li><a href="/chart">Gráfico da Situação dos Veiculos</a></li>
                  <li><a href="/informacao/add">Sobre</a></li>

              </ul>
            </li>

        </ul>
      </nav>
  </div>
</aside>

    <main class="ls-main ">
      <div class="container-fluid">

        	@yield('content')

      </div>
    </main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.0/javascripts/locastyle.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script> -->
  </body>
</html>
