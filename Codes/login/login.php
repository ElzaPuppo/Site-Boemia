<!DOCTYPE html>

<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boêmia</title>
    <meta name="description" content="">
    <meta name="author" content="">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
        <!-- Stylesheet
            ================================================== -->
        <link rel="stylesheet" type="text/css"  href="../css/stylelog.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/default.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        
  </head>




  <!--Cabeçalho-->
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll "  href="../index.php"><img src="../img/logocerto.png"  width="140px"></a>  </div>
      
        <br>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#sobre" class="page-scroll">Sobre</a></li>
            <li><a href="faq.php" class="page-scroll">F.A.Q.</a></li> 
            <li><a href="login/login.php">Login</a></li>
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
                    <form action="logar.php" method="POST">
                      
                      <div class="form-group">
                      <label>Email:</label>
                      <input type="email" name="email" class="form-control " placeholder="Insira email...">
                      </div>
                      <div class="form-group">
                      <label>Senha:</label>
                      <input type="password" name="senha" class="form-control " placeholder="Insira senha...">
                      </div>

                      <a class="btn" href="../cadastro.php" role="button">Não sou cadastrado</a><br>
                      <button type="submit" name="Logar" class="btn">Enviar</button>
                    </form>

                    <br><br>
            </div>
          </div>
        </div>
      </div>
    </header>
   
    </body>
    </html>