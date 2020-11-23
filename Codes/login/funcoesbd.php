<?php
function Busca_Usuario($conexao,$Email_Usuario,$Senha_Usuario){
    $sql = "SELECT * FROM tbl_usuario WHERE 
    email_usuario = '$Email_Usuario' 
    AND senha_usuario = '$Senha_Usuario'";
    $query_usuario = mysqli_query($conexao,$sql);
    return $query_usuario;
}
?>