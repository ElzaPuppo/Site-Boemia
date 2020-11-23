<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'conexao.php';
include_once 'funcoesbd.php';

$Email_Usuario = $_POST['email'];
$Senha_Usuario = $_POST['senha'];

$query_usuario = Busca_Usuario($conexao,$Email_Usuario,$Senha_Usuario);
$linhas_encontradas = mysqli_num_rows($query_usuario);
if($linhas_encontradas>0){
    session_start();
    $Registro_Usuario = mysqli_fetch_array($query_usuario);
    $_SESSION['Nome_Usuario']=$Registro_Usuario['nome_usuario'];
    $_SESSION['Email_Usuario']=$Registro_Usuario['email_usuario'];
    $_SESSION['Tipo_Usuario']=$Registro_Usuario['tipo_usuario'];
    if(($_SESSION['Tipo_Usuario'])==1){
        header("Location:../adm.php");
        die();
    } else if (($_SESSION['Tipo_Usuario'])==0){
        header("Location:../comum.php");
        die();
    } else {
        header("Location:login.php");
        die();
    }
} else {
    echo "Usuario ou senha incorreta - tente Novamente!!!";
    header("Refresh:3;login.php");
    die();
}
?>