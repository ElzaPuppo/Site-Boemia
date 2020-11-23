<?php 
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';

	$senha = addslashes($_POST['senha']);
	$email = addslashes($_POST['email']);
	
	if(!(verificarSenhaUsuario($email, $senha, $conexao))){
		echo 'Usuário e/ou senha inválidos!';
	}else {
		session_start();
		$_SESSION['email'] = $email;
		echo 'sucesso';
	}
	
?>