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
		  <?php 
			
			session_start();
			if(isset($_SESSION['email'])){ ?>
			<li><a href="servicos.php" class="page-scroll">Serviços</a></li>
            <li><a href="eventos.php" class="page-scroll">Meu Evento</a></li>
			<?php } ?>
            <li><a href="index.php" class="page-scroll">Sobre</a></li>
            <li><a href="faq.php" class="page-scroll">F.A.Q.</a></li> 
            <li><a href="login.php">Login</a></li>
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
	
<!-- Conteudo-->
    <div id="sobre">
      <div class="container">
        <div class="section-title text-center center">
          <br>
          <h2>Cadastro</h2>
          <hr>
        </div>
        <div class="row">
          <form action="#" method="POST">
                    <div class="form-group col-sm-6">
                      <label>Nome:</label>
                      <input type="text" id="nome" class="form-control " placeholder="Seu nome...">
                      </div>
					   <div class="form-group col-sm-6">
                      <label>Sobrenome:</label>
                      <input type="text" id="sobrenome" class="form-control " placeholder="Seu sobrenome...">
                      </div>
                      <div class="form-group col-sm-6">
                      <label>Email:</label>
                      <input type="email" name="email" id="email" class="form-control " placeholder="Insira email...">
                      </div>
                      <div class="form-group col-sm-6">
                      <label>Senha:</label>
                      <input type="password" id="senha" class="form-control " placeholder="Insira senha...">
                      </div>
					  <center><input type="button" class="btn  btn-default" value="Cadastrar" onClick="cadastra()" ></center>

                    </form>
		  
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

<script type="text/javascript">

	function cadastra(){
		nome = document.getElementById('nome').value;
		sobrenome = document.getElementById('sobrenome').value;
		senha = document.getElementById('senha').value;
		email = document.getElementById('email').value;
		
		var r = new RegExp("^[a-zA-Z0-9_]*$");
		if(nome==''){
			alert('Nome não pode ser vazio');
			return;
		}
		if(sobrenome==''){
			alert('Sobrenome não pode ser vazio');
			return;
		}
		if(senha==''){
			alert('Senha não pode ser vazia');
			return;
		}
		if(email==''){
			alert('E-mail não pode ser vazio');
			return;
		}

        $.ajax({
		type: "POST",
		url: "inserirUsuario.php",
		data:{
			nome: nome,
			email: email,
			senha: senha,
			sobrenome: sobrenome
		},
		success: function(data){
			if (data == 'sucesso'){
				alert('Usuário cadastrado com sucesso!' );
				window.location = "login.php?email="+email;
			} else {
				alert(data);
			}
			
			
		}
	});
	}
</script>



