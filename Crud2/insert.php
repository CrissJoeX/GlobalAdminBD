<?php

require("conexion.php");

$idMasc = $_POST["idMasc"];
$nomMasc = $_POST["nomMasc"];
$pMasc = $_POST["pMasc"];
$sexMasc = $_POST["sexMasc"];
$idR = $_POST["idR"];
$estMasc = $_POST["estMasc"];

$query = "INSERT INTO mascota (idMascota, nombre, peso, sexo, idRaza, estatus)
VALUES ('$idMasc', '$nomMasc', '$pMasc', '$sexMasc', '$idR', '$estMasc')";
echo $query;
$insert = mysqli_query($conexion,$query);
echo "<script>window.location.href = 'index.php';</script>";

?>