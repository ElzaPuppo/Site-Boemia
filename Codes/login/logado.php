<?php

header('Content-Type: text/html; charset=utf-8');

if(!isset($_SESSION)) session_start();

if(!isset($_SESSION['Email_Usuario'])){
    session_destroy();
    header("Location:login.php");
}

echo "Nome Usuario: ".$_SESSION['Nome_Usuario'];
echo "<br>";
echo "Email Usuario: ".$_SESSION['Email_Usuario'];
echo "<br>";
echo "Tipo Usuario: ".$_SESSION['Tipo_Usuario'];


?>
<a href="logout.php">LOGOUT</a>