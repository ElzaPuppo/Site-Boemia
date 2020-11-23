<?php


function criptografar($string){
	return hash('ripemd160', $string);
}

function query($db_connection,$query){
	
	
	mysqli_query($db_connection,"SET NAMES 'utf8'");

	$result = mysqli_query($db_connection, $query);
	if (!$result){
		//echo "Database query failed on query ".$query." error: ".mysqli_error($db_connection);
		
		$myfile = fopen("query.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $query);
		fclose($myfile);
		
		return NULL;
	}
		
	$return = array();
	
	if(is_bool($result)){
		$qtd =0;
	}else{
		$qtd = mysqli_num_rows($result);
	}
	
	for($i=0;$i<$qtd;$i++){
		$return[$i]= mysqli_fetch_assoc($result);
	}
	return $return;
}

function inserirUsuario($nome, $sobrenome, $email, $senha, $conexao){
	$senha = criptografar($senha);
	$sql = "INSERT INTO tabela_usuario (nome_usuario, sobrenome_usuario, email_usuario, senha_usuario) VALUES ('$nome','$sobrenome','$email','$senha')";
    $resultado = query($conexao,$sql);
}

function verificarEmail($email, $conexao){
	$sql = "SELECT * FROM tabela_usuario WHERE email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	if(!isset($resultado[0])) return false;
	else return true;
}

function verificarSenhaUsuario($email, $senha, $conexao){
	$senha = criptografar($senha);
	$sql = "SELECT * FROM tabela_usuario WHERE email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	if(!isset($resultado[0])) return false;
	if($resultado[0]['senha_usuario']==$senha)
		return true;
	else return false;
}

function inserirEvento($email, $texto, $data, $local, $conexao){
	$sql = "DELETE FROM tabela_evento WHERE email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	$sql = "INSERT INTO tabela_evento (email_usuario, texto_convite, data_hora, local) VALUES ('$email', '$texto', '$data', '$local')";
    $resultado = query($conexao,$sql);
}

function infoEvento($email, $conexao){
	$sql = "SELECT * FROM tabela_evento WHERE email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	if(!isset($resultado[0])) return false;
	else return $resultado[0];
}

function infoOrcamento($email, $conexao){
	$sql = "SELECT * FROM tabela_orcamento WHERE email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	if(!isset($resultado[0])) return false;
	else return $resultado[0];
}

function infoProfissionais($email, $conexao){
	$sql = "SELECT * FROM tabela_evento_profissional INNER JOIN tabela_profissionais on tabela_evento_profissional.id_profissional = tabela_profissionais.id_funcionario WHERE email_usuario = '$email' ORDER BY tipo_servico";
    $resultado = query($conexao,$sql);
	if(!isset($resultado[0])) return false;
	else return $resultado;
}

function inserirOrcamento($email, $qtd_adulto, $qtd_crianca, $conexao){
	$sql = "DELETE FROM tabela_orcamento WHERE email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	$sql = "INSERT INTO tabela_orcamento (email_usuario, qtd_adultos, qtd_criancas) VALUES ('$email', '$qtd_adulto', '$qtd_crianca')";
    $resultado = query($conexao,$sql);
}

function inserirConvidado($email, $nome, $sobrenome, $telefone, $conexao){
	$sql = "INSERT INTO tabela_convidados (email_usuario, nome, sobrenome, telefone, verificado) VALUES ('$email', '$nome', '$sobrenome', '$telefone', 0)";
    $resultado = query($conexao,$sql);
}

function excluirConvidado($id_convidado, $conexao){
	$sql = "DELETE FROM tabela_convidados WHERE id_convidado='$id_convidado'";
    $resultado = query($conexao,$sql);
}

function confirmarConvidado($email){
	$sql = "UPDATE tabela_convidados SET verificado = 1 WHERE id_convidado='$id_convidado'";
    $resultado = query($conexao,$sql);
}

function marcarProfissional($id_profissional, $email, $conexao){
	$sql = "INSERT tabela_evento_profissional (id_profissional, email_usuario) VALUES ('$id_profissional', '$email')";
    $resultado = query($conexao,$sql);
}

function desmarcarProfissional($id_profissional, $email, $conexao){
	$sql = "DELETE FROM tabela_evento_profissional WHERE id_profissional = '$id_profissional' AND email_usuario = '$email'";
    $resultado = query($conexao,$sql);
}
function verificarProfissional($id_profissional, $email, $conexao){
	$sql = "SELECT * FROM tabela_evento_profissional WHERE id_profissional = '$id_profissional' AND email_usuario = '$email'";
    $resultado = query($conexao,$sql);
	if(!isset($resultado[0])) return false;
	else return true;
}
?>