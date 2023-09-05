<?php
    require("conexion.php");
    echo "Este es mi Proyecto Global <br>";
    
    $query = "SELECT * FROM expediente";


	if ($result = $conexion->query($query)) {

		while ($row = $result->fetch_assoc()) {
			$idEx = $row["idExpediente"];
            $idMasc = $row["idMascota"];
            $idVac = $row["idVacuna"];
            $diag = $row["diagnostico"];
            $estatus = $row["estatus"];
			
            echo $idEx . " " . $idMasc . " " . $idVac. " " . $diag . " " . $estatus . "<br>";
		}

        $result->free();

        }

?>