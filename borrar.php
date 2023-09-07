<?php


require("conexion.php");

$NumExp = $_GET['id'];

$sql = "DELETE FROM expediente WHERE idExpediente = $NumExp";
$resultado = mysqli_query($conexion, $sql);

echo "<script>window.location.href = 'index.php';</script>";

?>