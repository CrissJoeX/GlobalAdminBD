<?php
require("conexion.php");

$query = "SELECT masc.idMascota, masc.nombre as NombreMascota
, masc.Peso, masc.sexo, raz.tipo as TipoRaza ,masc.estatus FROM mascota as masc
JOIN raza as raz ON masc.idRaza = raz.idRaza ORDER BY masc.idMascota ASC";

echo "<h1>BASE DE DATOS VETERINARIA</h1>";
echo "<h3>REGISTRO DE MASCOTAS</h3>";

echo 'Agregar Mascota
<form action="insert.php" method="post">
<p>Id de Mascota: <input type="text" name="idMasc"></p>
<p> Nombre Mascota <input type="text" name="nomMasc"></p>
<p> Peso de Mascota: <input type="text" name="pMasc"></p>
<p> Sexo Mascota: <input type="text" name="sexMasc"></p>
<p> Id Raza: <input type="text" name="idR"></p>
<p> Estatus de Mascota <input type="text" name="estMasc"></p>
<p><input type="submit" value="Guardar"></p>
</form>';

if($result = $conexion->query($query)){
    while($row = $result->fetch_assoc())
    {
        $idMascot = $row["idMascota"];
        $nomMascot = $row["NombreMascota"];
        $pMascot = $row["Peso"];
        $sexMascot = $row["sexo"];
        $idRz = $row["TipoRaza"];
        $estMascot = $row["estatus"];

        echo $idMascot . " " . $nomMascot . " " . $pMascot . " " . $sexMascot . " " . $idRz . " " . $estMascot . " <a href='borrarId.php?id=".$idMascot."'>Eliminar</a>
        <a href='proceso.php?id=$idMascot'><button type='button'>Actualizar</button></a><br>";
        
    }
}

