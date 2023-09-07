<?php


require("conexion.php");

$idEx = $_POST["idEx"];
$idMasc = $_POST["idMasc"];
$idVac = $_POST["idVac"];
$diag  = $_POST["diag"];
$est = $_POST["est"];


$query = "INSERT INTO expediente (idExpediente,idMascota,idVacuna,diagnostico,estatus) 
VALUES ('$idEx', '$idMasc', '$idVac', '$diag', '$est')";
echo $query;
$insert = mysqli_query($conexion,$query); 
echo "<script>window.location.href = 'index.php';</script>";

?>
