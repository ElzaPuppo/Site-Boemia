
<?php

function Inclui($Nome,$Email,$Senha,$Tipo,$conexao){
    $sql = "INSERT INTO tbl_usuario (nome_usuario,email_usuario,senha_usuario,tipo_usuario) 
    VALUES ('$Nome','$Email','$Senha','$Tipo')";
    $resultado = mysqli_query($conexao,$sql);
    return $resultado;

}
function Consulta_Nome($conexao){
    $sql = "SELECT nome_usuario FROM tbl_usuario";
    $resultado = mysqli_query($conexao,$sql);
    return $resultado;
}

?>