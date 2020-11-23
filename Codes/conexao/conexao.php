<?php

 $nome_servidor = 'localhost';
 $banco_dados ='boemia';
 $nome_usuario = 'root';
 $senha_usuario = '';

 $conexao = mysqli_connect($nome_servidor,$nome_usuario,$senha_usuario,$banco_dados);

 if(!$conexao){
     die("Falha de Conexão!!!" .mysqli_connect_error());
 }

mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, 'SET character_set_connection=utf8');
mysqli_query($conexao, 'SET character_set_client=utf8');
mysqli_query($conexao, 'SET character_set_results=utf8');
?>