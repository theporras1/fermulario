<?php

$servername = "localhost";
$database = "biblioteca";
$username = "root";
$password = "porrasgarcia12";


try{
$conn = new
PDO("mysql:host=$servername;dbname=biblioteca",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo"Connection failed:".$e->getMessage();
}
$titulo= $_POST['titulo'];
$idioma= $_POST['idioma'];
$paginas= $_POST['paginas'];
$editorial= $_POST['editorial'];

try{
$sql = "INSERT INTO biblioteca(titulo,idioma,paginas,editorial) VALUES ('$titulo', '$idioma', '$paginas', '$editorial')";
$conn->exec($sql);
echo "REGISTRO CREADO CON EXITO";
}catch(PDOeXCEPTION $e){
echo $sql."<br>".$e->getMessage();
}

$conn=null;
?>

