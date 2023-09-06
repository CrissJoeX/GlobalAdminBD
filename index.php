<?php
    require("conexion.php");
    echo "Este es mi Proyecto Global <br>";
    
    $query = "SELECT ex.idExpediente as NumeroExpediente, 
    masc.nombre as NombreMascota, vac.nombre as NombreVacuna, 
    ex.diagnostico, ex.estatus FROM expediente as ex
    JOIN mascota as masc ON ex.idMascota = masc.idMascota
    JOIN vacuna as vac ON ex.idVacuna = vac.idVacuna WHERE ex.estatus = 1 ORDER BY NumeroExpediente ASC";
    
    echo "<h1>BASE DE DATOS VETERINARIA</h1>";
    echo "<h3>EXPEDIENTE DE PACIENTES</h3>";
    //echo "<a href = 'index.php'>Expediente</a><br><br>";


	if ($result = $conexion->query($query)) {

		while ($row = $result->fetch_assoc()) {
			$idEx = $row["NumeroExpediente"];
            $idMasc = $row["NombreMascota"];
            $idVac = $row["NombreVacuna"];
            $diag = $row["diagnostico"];
            $estatus = $row["estatus"];
			
            echo $idEx . " " . $idMasc . " " . $idVac. " " . $diag . " " . $estatus .
            "<a href='insertar.php?id=".$idEx."'> Insertar</a><br>";
		}

        $result->free();

        }

?>