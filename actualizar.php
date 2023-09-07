<?php


require("conexion.php");

$sql = "UPDATE registro_saax SET idMasc = $idMascota, idVac = idVacuna,
est = $estatus, diag = $diagnostico WHERE idEx = '$idExpediente'";

?>