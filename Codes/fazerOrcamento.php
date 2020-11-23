<?php 
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';

	session_start();
	$email = $_SESSION['email'];

	$criancas = addslashes($_POST['criancas']);
	$adultos = addslashes($_POST['adultos']);
	
	inserirOrcamento($email, $adultos, $criancas, $conexao);
	
	echo("sucesso");
	
?>