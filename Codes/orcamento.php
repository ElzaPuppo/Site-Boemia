<!DOCTYPE html>
<?php
require_once 'conexao/conexao.php';
require_once 'funcoesbd/funcoesbd.php';
?>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boêmia</title>
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

        <!-- Stylesheet
            ================================================== -->
        <link rel="stylesheet" type="text/css"  href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        
  </head>


    <!--Cabeçalho-->
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll "  href="comum.php"><img src="img/logocerto.png" width="140px"></a>  </div>
      
        <br>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php #sobre" class="page-scroll">Sobre</a></li>
            <li><a href="servicos.php" class="page-scroll">Serviços</a></li> 			
            <li><a href="eventos.php" class="page-scroll">Meus Eventos</a></li> 
            <li><a href="faq.php" class="page-scroll">F.A.Q.</a></li> 
            <li><a href="login/logout.php">Sair</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    <header id="header">
      <div class="intro">
        <div class="overlay">
          <div class="container">
              <div class="intro-text">

    

    <!--Formulario-->
    
    <form action="#" method="POST">
        <div class="form-row">
             <div class="form-group col-md-6">
                <label>Número de crianças:</label>
                <input type="number" name="criancas" class="form-control" placeholder="vai ter?...">
                </div>
             <div class="form-group col-md-6">
                <label>Número de adultos:</label>
                <input type="number" name="adultos" class="form-control ">
             </div>
        </div>        
             
              
            <input type="submit" name="calcular" class="btn">
         </form>


         </div>
          </div>
        </div>
      </div>
</header>


     <?php 

     if(isset($_POST['Enviar'])){
     $criancas = $_POST['criancas'];
     $adultos = $_POST['adultos'];
     $resultado = Inclui($Nome,$Email,$Telefone,$Rua,$Cidade,$Metragem,$Tipo_pedra,$Loca,$conexao);	 
     $resultado = calcula($criancas,$adultos,$conexao);
     return $resultado;
     }


     

    ?>

    <!--Rodape-->
    <div id="footer">
      <div class="container text-center">
        <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/people/Vanessa-Marcelo-Pedras/100004339178692"><img src="img/facebook.png" width="30" height="30"></a></li>
			<li><a href="https://www.facebook.com/people/Vanessa-Marcelo-Pedras/100004339178692"><img src="img/instagram.png" width="30" height="30"></a></li>
			<li><img src="img/whats.png" width="24" height="24"> (11) 99315-9191</i></li>
          </ul>
        </div>
      </div>
    </div>
    
        <script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
        <script type="text/javascript" src="js/bootstrap.js"></script> 
        <script type="text/javascript" src="js/SmoothScroll.js"></script> 
        <script type="text/javascript" src="js/nivo-lightbox.js"></script> 
        <script type="text/javascript" src="js/jquery.isotope.js"></script> 
        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
        <script type="text/javascript" src="js/contact_me.js"></script> 
        <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>