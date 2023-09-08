<?php

require("conexion.php");

$idEx = $_GET["id"];
$idMasc = $_POST["idMasc"];
$idVac = $_POST["idVac"];
$diag = $_POST["diag"];
$est = $_POST["est"];

$query = "UPDATE expediente SET idMascota = '$idMasc',idVacuna = '$idVac', diagnostico = '$diag', estatus = '$est'
    WHERE idExpediente = $idEx";
echo $query;

$ejecucion = mysqli_query($conexion, $query);

echo "<script>window.location.href = 'index.php';</script>";

?>
