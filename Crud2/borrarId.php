<?php
require("conexion.php");

$idMascot = $_GET["id"];

$sql = "DELETE FROM mascota WHERE idMascota = $idMascot ";
$resultado = mysqli_query($conexion,$sql);

echo "<script>window.location.href = 'index.php' </script>";


?>