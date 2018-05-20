<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
    include_once('PAGES/header.php');
    ?>
</head>
<body class="back-page">

<!--NavBar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-calendar-alt"></i>&nbsp;&nbsp;Agenda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="PAGES/login.php"><i class="fa fa-sign-in-alt" ></i>&nbsp;&nbsp;Login</a></li>
        <li><a href="PAGES/register.php"><i class="fa fa-address-book"></i>&nbsp;&nbsp;Registrar-se</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<footer class="main-footer footer-landpage">
    <div class="pull-right hidden-xs">
        <div style="text-align: right">
            <strong>
                Curso de Análise e Desenvolvimento de Sistemas &nbsp;
                <br>
                Desenvolvido por: Gustavo Calça Lombarde &nbsp;
            </strong>
        </div>
    </div>
    <strong>
        &nbsp; FATEC Taubaté
        <br>
        &nbsp; Copyright &copy; <?php echo date('d/m/Y'); ?>. Todos os direitos reservados.
    </strong>
</footer>

    <?php
        include_once('PAGES/js.php');
    ?>
</body>
</html>