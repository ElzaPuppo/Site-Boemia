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
		    <li><a href="index.php#sobre" class="page-scroll">Sobre</a></li>
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
      <div class="intro">
        <div class="overlay">
          <div class="container">
            <div class="row">
				<div class="intro-text">
						<br>
						<h1>Boêmia</h2>
						<p>Organize a sua festa com autonomia</p> 
						<br>
				</div>
          </div>
        </div>
      </div>
    </header>
    <!-- Sobre Nós-->
    <div id="faq">
      <div class="container">
        <div class="faq-title text-center center">
          <br>
          <h2>F.A.Q.</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 text-center"> <img src="img/faq.png" width="400" alt=""> </div>
          <div class="col-xs-12 col-md-6">
            <div class="sobre-text">
              <h3>Quanto preciso pagar para usar o site?</h3>
              <p>O site é totalmente gratuíto.</p>
              <h3>Quais os profissionais que posso contratar pela plataforma?</h3>
              <p>No momento é possível contratar fotógrafos, DJ's e decoradores.</p>
			  <h3>Como é feito o envio dos convites?</h3>
              <p>Os convites são enviados via Whatsapp.</p>
			  <h3>Como é feito o calculo do orçamento?</h3>
              <p>O calculo é feito utilizando o número de convidados adultos e crianças, com a quantidade de bebidas e comidas indicadas por pessoa.</p>
			  <h3>Onde fica o meu cronograma do evento?</h3>
              <p>Integrado a plataforma Zoho, utiliza-se uma planilha, que pode ser feito o download e impressa se desejar.</p>
            </div>
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