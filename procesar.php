
<?php
require("conexion.php");

if (isset($_GET["id"])) {
    $idExpediente = $_GET["id"];
    $query = "SELECT * FROM expediente WHERE idExpediente = $idExpediente";
    $result = $conexion->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $idExpediente = $row["idExpediente"];  
        $idMasc = $row["idMascota"];
        $idVac = $row["idVacuna"];
        $diagnostico = $row["diagnostico"];
        $estatus = $row["estatus"];

        echo "<h1>Actualizar Expediente</h1>";
        echo "<form action='actualizar.php?id=$idExpediente' method='post'>";
        echo "Numero de Expediente: <input type='text' name='idEx' value='$idExpediente' readonly><br>"; 
        echo "idMascota: <input type='text' name='idMasc' value='$idMasc'><br>";
        echo "idVacuna: <input type='text' name='idVac' value='$idVac'><br>"; 
        echo "diagnostico: <input type='text' name='diag' value='$diagnostico'><br>";
        echo "estatus: <input type='text' name='est' value='$estatus'><br>";
        echo "<input type='submit' value='Guardar'>";
        echo "</form>";
    } 
}
/*



}*/