<?php

require("conexion.php");

if (isset($_GET["id"])) {
    $idMascot = $_GET["id"];
    $query = "SELECT * FROM mascota WHERE idMascota = $idMascot";
    $result = $conexion->query($query);

    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $idMascot = $row["idMascota"];
        $nom = $row["nombre"];
        $p = $row["Peso"];
        $s = $row["sexo"];
        $idRaz = $row["idRaza"];
        $est = $row["estatus"];
        
        echo "<h1>Actualizar registro de Mascotas</h1>";
        echo "<form action='actualiza.php?id=$idMascot' method='post'>";
        echo "Id de Mascota: <input type='text' name='idMasc' value='$idMascot' readonly><br>";
        echo "Nombre Mascota: <input type='text' name='nomMasc' value='$nom' ><br>";
        echo "Peso de Mascota: <input type='text' name='pMasc' value='$p'><br>";
        echo "Sexo Mascota: <input type='text' name='sexMasc' value='$s'><br>";
        echo "Id Raza: <input type='text' name='idRa' value='$idRaz'><br>";
        echo " Estatus Mascota: <input type='text' name='estMasc' value='$est'><br>";
        echo "<input type='submit' value='Guardar'>";
        echo "</form>";

        echo $query;
     }
}

?>