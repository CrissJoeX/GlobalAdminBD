<?php
require("conexion.php");

echo "Este es mi Proyecto Global <br><br>";

$query = "SELECT ex.idExpediente as NumeroExpediente, 
masc.nombre as NombreMascota, vac.nombre as NombreVacuna, 
ex.diagnostico, ex.estatus FROM expediente as ex
JOIN mascota as masc ON ex.idMascota = masc.idMascota
JOIN vacuna as vac ON ex.idVacuna = vac.idVacuna WHERE ex.estatus = 1 ORDER BY NumeroExpediente ASC";

echo "<h1>BASE DE DATOS VETERINARIA</h1>";
echo "<h3>EXPEDIENTE DE PACIENTES</h3>";

echo 'Insertar Expediente
<form action="insertar.php" method="post">
    <p>idExpediente: <input type="text" name="idEx"></p>
    <p>idMascota: <input type="text" name="idMasc"></p>
    <p>idVacuna: <input type="text" name="idVac"></p>
    <p>diagnostico: <input type="text" name="diag"></p>
    <p>estatus: <input type="text" name="est"></p>
    <p><input type="submit" value="Guardar"></p>
</form>';

echo "<a href = 'reporte.php'> Reporte </a> <br>";

if ($result = $conexion->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $NumExp = $row["NumeroExpediente"];
        $NomMasc = $row["NombreMascota"];
        $NomVac = $row["NombreVacuna"];
        $diagno = $row["diagnostico"];
        $estat = $row["estatus"];
        
        echo $NumExp . " " . $NomMasc . " " . $NomVac. " " . $diagno . " " . $estat . "<a href='borrar.php?id=".$NumExp."'> eliminar</a> 
        <a href='procesar.php?id=$NumExp'><button type='button'>Actualizar</button></a><br>";
    }
}
?>
