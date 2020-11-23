<!DOCTYPE html>
<?php
    include 'conexao/conexao.php';
    include 'operacoesBD.php';

session_start();
if(!isset($_SESSION['email'])){
	header('Location: index.php');
 }
?>

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
   
<!-- Conteudo-->
    <div id="sobre">
      <div class="container">
        <div class="section-title text-center center">
          <h2>Evento</h2>
          <hr>
		  <?php $evento = infoEvento($_SESSION['email'], $conexao); 
		  
		  echo $evento["texto_convite"]."<br><br>";
		  echo "<b>Data/hora:</b> ".$evento["data_hora"]."<br>";
		  echo "<b>Local:</b> ".$evento["local"]."<br>";
		  
		  
		  ?>
        </div>
        <div class="row">
          <form action="#" method="POST">
                    <div class="form-group col-sm-6">
                      <label>Data e hora:</label>
                      <input type="text" id="dataHora" class="form-control " placeholder="Data e hora do evento">
                      </div>
					   <div class="form-group col-sm-6">
                      <label>Local:</label>
                      <input type="text" id="local" class="form-control " placeholder="Local do evento">
                      </div>
                      <div class="form-group col-sm-12">
                      <label>Texto:</label>
                      <input type="email" id="texto" class="form-control " placeholder="Insira o texto do convite">
                      </div>

					  <center><input type="button" class="btn  btn-default" value="Atualizar" onClick="atualizar()" ></center>

                    </form>
		  
			<br><br><br>
        </div>
      </div>
    </div>
	
<!-- Conteudo-->
    <div id="sobre">
      <div class="container">
        <div class="section-title text-center center">
          <br>
          <h2>Orçamento</h2>
          <hr>
		  <?php $orcamento = infoOrcamento($_SESSION['email'], $conexao); 
		   $adulto = $orcamento["qtd_adultos"];
		   $crianca = $orcamento["qtd_criancas"];
		  echo "<b>Quantidade de adultos:</b> ".$adulto."<br>";
		  echo "<b>Quantidade de crianças:</b> ".$crianca."<br>";
		  $valorBuffet = $adulto * 35 + $crianca * 15;
		  echo "<b>Valor do Buffet (comida/bebidas):</b> R$".$valorBuffet.",00<br><br>";
		  
		  $profissionais = infoProfissionais($_SESSION['email'], $conexao);	  
		  $valorProfissional = 0;
		  if (isset($profissionais[0])){
			  for ($i=0; $i < (count($profissionais)); $i++){
				  echo "<b>Profissional:</b> ".$profissionais[$i]["tipo_servico"]."<br>";
				  echo "<b>Nome:</b> ".$profissionais[$i]["nome"]."<br>";
				  echo "<b>Valor:</b> R$".$profissionais[$i]["valor"].",00<br><br>";
				 $valorProfissional += $profissionais[$i]["valor"];
			  }
			 $valorTotal = $valorBuffet +  $valorProfissional;
		  echo "<b>Valor dos profissionais selecionados:</b> R$".$valorProfissional.",00<br><br>"; 		  
		  echo "<b>Valor Total:</b> R$".$valorTotal.",00<br>"; 
		  }
		  
		  
		  
		  
		  ?>
        </div>
        <div class="row">
          <form action="#" method="POST">
                    <div class="form-group col-sm-6">
                      <label>Quantidade de crianças:</label>
                      <input type="number" id="qtdCriancas" class="form-control " placeholder="Insira o número de crianças">
                      </div>
					   <div class="form-group col-sm-6">
                      <label>Quantidade de adultos:</label>
                      <input type="number" id="qtdAdultos" class="form-control " placeholder="Insira o número de adultos">
                      </div>

					  <center><input type="button" class="btn  btn-default" value="Fazer Orçamento" onClick="fazerOrcamento()" ></center>

                    </form>
		  
			<br><br><br>
        </div>
      </div>
    </div>
	
<!-- Conteudo-->
    <div id="sobre">
      <div class="container">
        <div class="section-title text-center center">
          <br>
          <h2>Convidados</h2>
          <hr>
        </div>
        <div class="row">
			<form action="#" method="POST">
                    <div class="form-group col-sm-6">
                      <label>Nome:</label>
                      <input type="text" id="nome" class="form-control " placeholder="Nome do convidado...">
                      </div>
					   <div class="form-group col-sm-6">
                      <label>Sobrenome:</label>
                      <input type="text" id="sobrenome" class="form-control " placeholder="Sobrenome do convidado...">
                      </div>
                      <div class="form-group col-sm-6">
                      <label>Whatsapp:</label>
                      <input type="text" id="whatsapp" class="form-control " placeholder="Whatsapp do convidado (sem pontuações)">
                      </div>
					  <center><input type="button" class="btn  btn-default" value="Convidar" onClick="convidar()" ></center>
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
  <script type="text/javascript">

	function atualizar(){
		dataHora = document.getElementById('dataHora').value;
		local = document.getElementById('local').value;
		texto = document.getElementById('texto').value;
		
		var r = new RegExp("^[a-zA-Z0-9_]*$");
		if(dataHora==''){
			alert('Data-hora do evento não pode ser vazio');
			return;
		}
		if(local==''){
			alert('Local não pode ser vazio');
			return;
		}
		if(texto==''){
			alert('Texto não pode ser vazio');
			return;
		}

        $.ajax({
		type: "POST",
		url: "atualizarEvento.php",
		data:{
			dataHora: dataHora,
			local: local,
			texto: texto
			},
		success: function(data){
			if (data == 'sucesso'){
				alert('Evento atualizado com sucesso!' );
				window.location = "eventos.php";
			} else {
				alert(data);
			}
			
			
		}
	});
	}
	
	function fazerOrcamento(){
		criancas = document.getElementById('qtdCriancas').value;
		adultos = document.getElementById('qtdAdultos').value;
		
		var r = new RegExp("^[a-zA-Z0-9_]*$");
		if(criancas==''){
			alert('Quantidade de crianças não pode ser vazio');
			return;
		}
		if(adultos==''){
			alert('Quantidade de adultos não pode ser vazio');
			return;
		}

        $.ajax({
		type: "POST",
		url: "fazerOrcamento.php",
		data:{
			criancas: criancas,
			adultos: adultos
			},
		success: function(data){
			if (data == 'sucesso'){
				alert('Orçamento gerado com sucesso!' );
				window.location = "eventos.php";
			} else {
				alert(data);
			}
			
			
		}
	});
	}
	
	function convidar(){
		nomeConvidado = document.getElementById('nomeConvidado').value;
		sobrenomeConvidado = document.getElementById('sobrenomeConvidado').value;
		whatsapp = document.getElementById('whatsapp').value;

		
		var r = new RegExp("^[a-zA-Z0-9_]*$");
		if(nomeConvidado==''){
			alert('Nome Convidado não pode ser vazio');
			return;
		}
		if(sobrenomeConvidado==''){
			alert('Sobrenome não pode ser vazio');
			return;
		}
		if(whatsapp==''){
			alert('Whatsapp não pode ser vazio');
			return;
		}

        $.ajax({
		type: "POST",
		url: "adicionarConvidado.php",
		data:{
			nomeConvidado: nomeConvidado,
			sobrenomeConvidado: sobrenomeConvidado,
			whatsapp: whatsapp
			},
		success: function(data){
			if (data == 'sucesso'){
				alert('Convidado adicionado com sucesso!' );
				window.location = "eventos.php";
			} else {
				alert(data);
			}
		}
	});
	}
</script>

</html>
