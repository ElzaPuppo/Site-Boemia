<?php 
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';

	session_start();
	$email = $_SESSION['email'];

	$dataHora = addslashes($_POST['dataHora']);
	$local = addslashes($_POST['local']);
	$texto = addslashes($_POST['texto']);
	
	inserirEvento($email, $texto, $dataHora, $local, $conexao);
	
	echo("sucesso");
	
?>