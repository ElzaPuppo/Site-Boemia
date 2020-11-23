<?php

function Consulta($conexao){
    $sql = "SELECT * FROM pedido";
    $resultado = mysqli_query($conexao,$sql);
    return $resultado;
}
function Inclui($Nome,$Email,$Telefone,$Rua,$Cidade,$Metragem,$Tipo_pedra,$Loca,$conexao){
    $sql = "INSERT INTO pedido (Nome,Email,Telefone,Rua,Cidade,Metragem,Tipo_pedra,Loca) 
    VALUES ('$Nome','$Email','$Telefone','$Rua','$Cidade','$Metragem',' $Tipo_pedra','$Loca')";
    $resultado = mysqli_query($conexao,$sql);
    return $resultado;
}

function Excluir($Id_autor, $conexao){
    $sql = "DELETE FROM pedido WHERE Id_pedido = '$Id_pedido'";
    $Excluir = mysqli_query($conexao, $sql);
    return $Excluir;
}

function Altera($Id_autor, $Nome, $Email, $Telefone, $Rua, $Cidade, $Metragem, $Tipo_pedra, $Loca, $conexao){

$sql= "UPDATE pedido SET Nome = '$Nome', Email = '$Email', Telefone = '$Telefone' WHERE Id_pedido = '$Id_pedido'";

$altera = mysqli_query($conexao,$sql);
return $altera;
}

function consulta_id($conexao, $Id_pedido){
    $sql = "SELECT * FROM pedido WHERE Id_pedido = '$Id_pedido'";
    $consulta_id = mysqli_query($conexao,$sql);
    $pedido = mysqli_fetch_assoc($consulta_id);
    return $autor; 
}

?>