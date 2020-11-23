<?php 
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';

	session_start();
	$email = $_SESSION['email'];

	$nomeConvidado = addslashes($_POST['nomeConvidado']);
	$sobrenomeConvidado = addslashes($_POST['sobrenomeConvidado']);
	$whatsapp = addslashes($_POST['whatsapp']);
	
	inserirOrcamento($email, $adultos, $criancas, $conexao);
	
	echo("sucesso");
	
?>