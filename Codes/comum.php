<!DOCTYPE html>
<?php
    include 'conexao/conexao.php';
    include 'funcoesbd/funcoescad.php';
    session_start();
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
          <a class="navbar-brand page-scroll "  href="index.php"><img src="img/logocerto.png" width="140px"></a>  </div>
      
        <br>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#sobre" class="page-scroll">Sobre</a></li>
            <li><a href="#servicos" class="page-scroll">Serviços</a></li>
            <li><a href="#portfolio" class="page-scroll">Pedras</a></li>  
            <li><a href="orcamento.php" class="page-scroll">Orçamento</a></li>  
            <li><a href="login/logout.php" >Sair</a></li>
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
                <br>
                <br>
                <h1>MV PEDRAS </h1>
                <p><?php echo "Bem Vindo(a)    ".$_SESSION['Nome_Usuario']; ?></p>
                <br>
                <br>
                <br>
            </div>
          </div>
        </div>
      </div>
    </header>

     



    <!-- Sobre Nós-->
    <div id="sobre">
      <div class="container">
        <div class="section-title text-center center">
          <br>
          <h2>Sobre Nós</h2>
          <hr>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 text-center"> <img src="img/empresa.jpg" width="400" height="410" alt=""> </div>
          <div class="col-xs-12 col-md-6">
            <div class="sobre-text">
            <h3>A Empresa</h3>
              <p>Com mais de 25 anos de experiência a MV pedras é gerida pelo casal Marcelo e Vanessa desde 2010.</p>
              <h3>Como Funcionamos</h3>
              <p>As pedras são fornecidas pela marmoraria RePedras na região de Jundiaí, e o casal apenas realiza o revestimento sempre prestabdo a melhor qualidade do mercado.</p>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Serviços -->
    <div id="servicos">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 section-title text-center">
          <h2>Serviços</h2>
          <hr>
          <p>Aplicamos o revestimento em diferentes superfícies.</p>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-4 service"> <img src="img/Servicos/bucólico.jpg" width="200" height="250"  alt="Project Title">
            <h3>Paredes</h3>
            <p>Decoração em paredes internas e externas para dar sofisticação ao ambiente</p>
          </div>
          <div class="col-xs-12 col-sm-4 service"> <img src="img/Servicos/chao.jpg" width="200" height="250"  alt="Project Title">
            <h3>Chão</h3>
            <p>Calçadas e pavimentos em pedra com a melhor qualidade</p>
          </div>
          <div class="col-xs-12 col-sm-4 service"> <img src="img/Servicos/piscina.png" width="200" height="250" alt="Project Title">
            <h3>Piscinas</h3>
            <p>Toda boa piscina tem um bom revestimento em pedra que você encontra aqui</p>
          </div>
        </div>
      </div>
    </div>




 
    <!-- Tipos de Pedra-->
    <div id="portfolio">
      <div class="container">
        <div class="section-title text-center center">
          <h2>Tipos de Pedra</h2>
          <hr>
          <p>Clique na imagem e veja serviços com essa pedra.</p>
        </div>
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="type">
                <li><a href="#" data-filter=".filetao" >Filetões</a></li>
                <li><a href="#" data-filter=".madeira">Pedra Madeira</a></li>
                <li><a href="#" data-filter=".filete">Filetes</a></li>
                <li><a href="#" data-filter=".piscinas">Piscinas</a></li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="row">
          <div class="portfolio-items"> 

        <!--Filetão-->     
          <div class="col-sm-6 col-md-4 col-lg-4 filetao">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filetão pedra madeira amarelada canário" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filetão pedra madeira amarelada canário</h4>
                  </div>
                  <img src="img/repedras/filetao/filetao_pedra_madeira_amarelada_canario.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filetao">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filetão pedra madeira branca codorna" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filetão pedra madeira branca codorna</h4>
                  </div>
                  <img src="img/repedras/filetao/filetao_pedra_madeira_branca_codorna.jpg" class="img-responsive" alt="Filetão pedra madeira branca codorna"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filetao">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filetão pedra madeira predominte verde" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filetão pedra madeira predominte verde</h4>
                  </div>
                  <img src="img/repedras/filetao/filetao_pedra_madeira_predominte_verde.jpg" class="img-responsive" alt="Filetão pedra madeira predominte verde"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filetao">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filetão pedra madeira tradicional" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filetão pedra madeira tradicional</h4>
                  </div>
                  <img src="img/repedras/filetao/filetao_pedra_madeira_tradicional.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <!--Filete--> 
          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete basalto cinza" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete basalto cinza </h4>
                  </div>
                  <img src="img/repedras/filete/filete_basalto_cinza_parede.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete canjiquinha guapé serrado" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete canjiquinha guapé serrado</h4>
                  </div>
                  <img src="img/repedras/filete/filete_canjiquinha_guape_serrado.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/quealuz.jpg" title="Filete canjiquinha mineira guapé rústico
                " data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete canjiquinha mineira guapé rústico</h4>
                  </div>
                  <img src="img/repedras/filete/filete_canjiquinha_mineira_guape_rustico.jpg" class="img-responsive" > </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete canjiquinha são tomé branco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete canjiquinha são tomé branco</h4>
                  </div>
                  <img src="img/repedras/filete/filete_canjiquinha_sao_tome_branco.jpg" class="img-responsive" > </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete especial almofadado" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete especial almofadado</h4>
                  </div>
                  <img src="img/repedras/filete/filete_especial_almofadado.jpg" class="img-responsive" > </a> </div>
              </div>
          </div> 

          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete guapé serrado" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete guapé serrado</h4>
                  </div>
                  <img src="img/repedras/filete/filete_guape_serrado.jpg" class="img-responsive" > </a> </div>
              </div>
          </div> 
          
          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/pedramadeira1.jpg" title="Filete pedra ferro" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete pedra ferro</h4>
                  </div>
                  <img src="img/repedras/filete/filete_pedra_ferro_.jpg" class="img-responsive" > </a> </div>
              </div>
          </div> 
          
          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete são tomé padronizado amarelado" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete são tomé padronizado amarelado</h4>
                  </div>
                  <img src="img/repedras/filete/filete_sao_tome_padronizado_amarelado.jpg" class="img-responsive" > </a> </div>
              </div>
          </div>
     
          <div class="col-sm-6 col-md-4 col-lg-4 filete">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Filete são tomé padronizado branco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Filete são tomé padronizado branco</h4>
                  </div>
                  <img src="img/repedras/filete/filete_sao_tome_padronizado_branco.jpg" class="img-responsive" > </a> </div>
              </div>
          </div>

          <!--Madeira-->

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/paredegrande.jpg" title="Pedra madeira amarelada cánario em caco rachada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira amarelada cánario em caco rachada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_amarelada_canario_em_caco_rachada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra madeira amarelada cánario" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira amarelada canário</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_amarelada_canario.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra madeira branca codorna em caco rachada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira branca codorna em caco rachada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_branca_codorna_em_caco_rachada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>
          
          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra madeira branca codorna serrada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira branca codorna serrada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_branca_codorna_serrada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra madeira cánario almofadada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira canário almofadada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_canario_almofadada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra madeira cinza clara em caco rachada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira cinza clara em caco rachada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_cinza_clara_em_caco_rachada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra madeira jacarandá em caco rachada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira jacarandá em caco rachada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_jacaranda_em_caco_rachada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/temverde.jpg" title="Pedra madeira rosada em caco rachada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira rosada em caco rachada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_rosada_em_caco_rachada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 madeira">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/ANIMATION.gif" title="Pedra madeira tradicional amarelada em caco rachada" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra madeira tradicional amarelada em caco rachada</h4>
                  </div>
                  <img src="img/repedras/madeira/pedra_madeira_tradicional_amarelada_em_caco_rachada.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <!--Piscina-->

          <div class="col-sm-6 col-md-4 col-lg-4 piscinas">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra goiás multicor em caco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra goiás multicor em caco</h4>
                  </div>
                  <img src="img/repedras/piscina/pedra_goias_multicor_em_caco_piscina.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 piscinas">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra luminária em caco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra luminária em caco</h4>
                  </div>
                  <img src="img/repedras/piscina/pedra_luminaria_caco_piscina.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 piscinas">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra mineira guapé em caco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra mineira guapé em caco</h4>
                  </div>
                  <img src="img/repedras/piscina/pedra_mineira_guape_caco_piscina.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 piscinas">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra são tomé amarelada em caco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra são tomé amarelada em caco</h4>
                  </div>
                  <img src="img/repedras/piscina/pedra_sao_tome_amarelada_em_caco_piscina.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 piscinas">
              <div class="portfolio-item">
                <div class="hover-bg"> <a href="img/TiposPedra/altar.jpg" title="Pedra goiás verde em caco" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4>Pedra goiás verde em caco</h4>
                  </div>
                  <img src="img/repedras/piscina/pidcina_goias_verde_caco.jpg" class="img-responsive"> </a> </div>
              </div>
          </div>





              
              
         </div>
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