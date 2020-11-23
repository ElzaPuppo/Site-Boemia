<!DOCTYPE html>
<?php
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';

session_start();
if(!isset($_SESSION['email'])){
	header('Location: index.php');
 }
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
          <a class="navbar-brand page-scroll "  href="comum.php"><img src="img/logocerto.png" width='140px'></a>  </div>
      
        <br>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
		    <li><a href="#sobre" class="page-scroll">Sobre</a></li>
            <li><a href="faq.php" class="page-scroll">F.A.Q.</a></li> 
			<?php 
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
   
    <!-- Tipos de Serviço-->
    <div id="portfolio">
      <div class="container">
        <div class="section-title text-center center">
          <h2>Tipos de Serviço</h2>
          <hr>
        </div>
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="type">
                <li><a href="#" data-filter=".fotografo" >Fotógrafos</a></li>
                <li><a href="#" data-filter=".dj">DJs</a></li>
                <li><a href="#" data-filter=".decoradores">Decoradores</a></li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <div class="portfolio-items"> 

        <!--Fotógrafos-->     
          <div class="col-xs-12 col-sm-6 fotografo" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/fotografo/1.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Joana Fontes</p> FOTÓGRAFA: Com 6 anos de experiência no mercado, é especialista em casamentos ao ar livre.</div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="1"  <?php  if(verificarProfissional('1', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
          <div class="col-xs-12 col-sm-6 fotografo" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/fotografo/2.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Isadora Flores</p> FOTÓGRAFA: A mais experiente de nossas fotógrafas, com um portfólio cheio de diversidade!</div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="2" <?php  if(verificarProfissional('2', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
          <div class="col-xs-12 col-sm-6 fotografo" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/fotografo/3.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Carlos Nogueira</p> FOTÓGRAFO: Divertido e descontraído, é o mais criativo de nossos fotógrafos.</div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="3" <?php  if(verificarProfissional('3', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
		  
        <!--DJs-->     
          <div class="col-xs-12 col-sm-6 dj" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/dj/1.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Luana Telles</p> DJ: A mais experiente de nossos DJ's, possui equipamentos ideais para eventos de grande escala.</div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="4" <?php  if(verificarProfissional('4', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
		   <div class="col-xs-12 col-sm-6 dj" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/dj/2.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Lucca Trigo</p> DJ: Apresenta portfólio eclético, adapta-se a qualquer pedido dos noivos.</div>  
			  <div class="col-sm-1">
				<input type="checkbox" id="5" <?php  if(verificarProfissional('5', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
          <div class="col-xs-12 col-sm-6 dj" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/dj/3.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Marcia Conde</p> DJ: Muito alegre e divertida, consegue agradar a todos os estilos de convidados.</div>  
			  <div class="col-sm-1">
				<input type="checkbox" id="6" <?php  if(verificarProfissional('6', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
		  
        <!--Decoradores-->     
          <div class="col-xs-12 col-sm-6 decoradores" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/decorador/1.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Flávia Antunes</p> DECORADORA: Especializada em eventos temáticos.</div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="7" <?php  if(verificarProfissional('7', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
          <div class="col-xs-12 col-sm-6 decoradores" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/decorador/2.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Rosana Gomes</p> DECORADORA: Criativa e versátil, consegue fazer o simples parecer um luxo.</div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="8" <?php  if(verificarProfissional('8', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
          <div class="col-xs-12 col-sm-6 decoradores" style="padding-bottom:10px"> 
			  <div class="col-sm-4"><img src="img/servicos/decorador/3.png" width="100%"></div>
			  <div class="col-sm-7"  style="border: 5px solid #F8CBAD;"> <p>Marina Braga</p> DECORADORA: Possui muita experiência com eventos de grande escala, </div> 
			  <div class="col-sm-1">
				<input type="checkbox" id="9" <?php  if(verificarProfissional('9', $_SESSION['email'], $conexao)) echo 'checked' ?> onClick="marcar(this.id)"></label>
			  </div>
		  </div>
         </div>
        </div>
      </div>
    </div>
         </div>
          </div>
        </div>
      </div>
</header>

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

<html>

<script type="text/javascript">



	function marcar(id){
		if (document.getElementById(id).checked) url= "scriptMarcarProfissional.php"
		else url= "scriptDesmarcarProfissional.php";
        $.ajax({
		type: "POST",
		url : url,
		data:{
			id: id
		},
		success: function(data){
			alert(data);
		}
	});
	
	}
</script>
