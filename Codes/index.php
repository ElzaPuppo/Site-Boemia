<!DOCTYPE html>

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
          <a class="navbar-brand page-scroll "  href="index.php"><img src="img/logocerto.png" width="140px" ></a>  </div>
      
        <br>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
		    <li><a href="#sobre" class="page-scroll">Sobre</a></li>
            <li><a href="faq.php" class="page-scroll">F.A.Q.</a></li> 
			<?php 
			session_start();
			if(isset($_SESSION['email'])){ ?>
			<li><a href="servicos.php" class="page-scroll">Serviços</a></li>
            <li><a href="eventos.php" class="page-scroll">Meu Evento</a></li>
			<?php }
			else{?>
			<li><a href="login.php">Login</a></li>
			<?php }
			if(isset($_SESSION['email'])){ ?>
			<li><a href="logout.php" class="page-scroll">Logout</a></li>
			<?php } ?>
            
          </ul>
        </div>
        
      </div>
    </nav>

    <header id="header">
      <div class="introIndex">
        <div class="overlay" style="height:140px">
          <div class="container">
            <div class="row">
          </div>
        </div>
      </div>
    </header>
	<div>
	<div style="background-color:white; text-align: center; width: 100%;">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="display: inline-block; width: 70%" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/Slide1.PNG" width="100%" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/Slide2.PNG" width="100%" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/Slide3.PNG" width="100%" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	</div>




    <!-- Sobre Nós-->
    <div id="sobre">
      <div class="container">
        <div class="section-title text-center center">
          <br>
          <h2>Sobre Nós</h2>
          <hr>
        </div>
        		  
		<div class="row">
          <div class="col-xs-12 col-md-3" align="right">
              <img src="img/orcamento.png" width = "120px" alt=""> 
          </div>
			  <div class="col-xs-12 col-md-8">
            <div class="sobre-text">
				<h3>Orçamento</h3>
              <p>É possível fazer um orçamento do evento, utilizando o número de adultos e crianças convidadas. Além disso, vários serviços podem ser acessados como fotógrafo, DJ e decorador</p>
			  </div>
          </div>
		  </div>
		  <div class="row">
		  <div class="col-xs-12 col-md-4" align="right">
              <img src="img/cronograma.png" width = "120px" alt=""> 
          </div>
		   <div class="col-xs-12 col-md-8">
            <div class="sobre-text">
              <h3>Cronograma</h3>
              <p>Utilizando uma planilha integrada, é possível criar um cronograma para facilitar a organização do evento.</p>
			  </div>
          </div>
		  </div>
		  <div class="row">
		   <div class="col-xs-12 col-md-3" align="right">
              <img src="img/lista.png" width = "120px" alt=""> 
          </div>
			   <div class="col-xs-12 col-md-8">
            <div class="sobre-text">
			  <h3>Lista de convidados</h3>
              <p>O envio de convites pode ser feito pela plataforma, no qual o convidado confirma a presença. Além de fácil e prático, tudo é realizado via WhatsApp</p>
            </div>
          </div>

<br><br><br>
        </div>











<br><br><br>
        </div>
      </div>
    </div>

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