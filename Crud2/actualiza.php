<?php

require("conexion.php");

$idMascot = $_GET["id"];
$nomM = $_POST["nomMasc"];
$pM = $_POST["pMasc"];
$sM = $_POST["sexMasc"];
$iR = $_POST["idRa"];
$e = $_POST["estMasc"];

$query = "UPDATE mascota SET nombre = '$nomM', Peso = '$pM', sexo = '$sM', idRaza = '$iR', estatus = '$e' 
WHERE idMascota = $idMascot ";

$ejecucion = mysqli_query($conexion,$query);

echo "<script>window.location.href = 'index.php' </script>";
 

?>