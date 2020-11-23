<?php
require_once 'conexao/conexao.php';
require_once 'operacoesBD.php';
    $id_profissional = addslashes($_POST['id']);
	
	session_start();
	$email = $_SESSION['email'];
		
	desmarcarProfissional($id_profissional, $email, $conexao);
	echo 'Profissional removido do orçamento com sucesso!';
?>