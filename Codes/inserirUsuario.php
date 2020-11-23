<?php 
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';



	$sobrenome = addslashes($_POST['sobrenome']);
	$nome = addslashes($_POST['nome']);
	$senha = addslashes($_POST['senha']);
	$email = addslashes($_POST['email']);
	
	
	print_r($_POST);
	if(verificarEmail($email, $conexao)){
		echo 'Esse email já existe. Ele deve ser único';
	}else {
		inserirUsuario($nome, $sobrenome, $email, $senha, $conexao);
		echo 'sucesso';
	}
	
?>