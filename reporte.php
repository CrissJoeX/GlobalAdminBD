<?php
require("fpdf/fpdf.php");
require("conexion.php");

date_default_timezone_set('America/Mexico_City');

$fechaActual = date("d-m-Y");

$query = "SELECT ex.idExpediente as NumeroExpediente, 
masc.nombre as NombreMascota, vac.nombre as NombreVacuna, 
ex.diagnostico, ex.estatus FROM expediente as ex
JOIN mascota as masc ON ex.idMascota = masc.idMascota
JOIN vacuna as vac ON ex.idVacuna = vac.idVacuna WHERE ex.estatus = 1 ORDER BY NumeroExpediente ASC";


$pdf = new FPDF();
$pdf->AddPage( "L" );
$pdf->SetFont('Arial','B',16);

$pdf->SetXY("110", "10");
$pdf->Cell(50,15,utf8_decode('Reporte de Veterinaria'),0,1);
$pdf->SetFont('Arial','',12);
$pdf->SetXY("100", "20");
$pdf->Cell(30,15,utf8_decode('Generado por: Cristian Joel Gutierrez Lopez'),0,1);
$pdf->SetFont('Arial','',12);
$pdf->SetXY("80", "30");
$pdf->Cell(30,15,utf8_decode('En la sigueiente tabla se mostraran los registros de la veterinaria'),0,1);
$pdf->SetFont('Arial','',12);
$pdf->SetXY("225", "50");
$pdf->Cell(50,15,utf8_decode('Fecha: ' . $fechaActual),0,1);

$pdf->image("imagen/imagen2.jpg",20,15,32,32);
$pdf->image("imagen/imagen1.jpg",230,15,35,30);

$pdf->Cell(15,10, "No.", 'LRBT', 0);
$pdf->Cell(50,10, "Mascota", 'LRBT', 0);
$pdf->Cell(50,10, "Vacuna", 'LRBT', 0);
$pdf->Cell(80,10, utf8_decode("Diagnóstico"), 'LRBT', 1);
 
$result = $conexion->query($query);

foreach($result as $row)
{
    $pdf->Cell(15,10, $row['NumeroExpediente'], 'LRBT', 0);
    $pdf->Cell(50,10, $row['NombreMascota'], 'LRBT', 0);
    $pdf->Cell(50,10, $row['NombreVacuna'], 'LRBT', 0);
    $pdf->Cell(80,10, utf8_decode($row['diagnostico']), 'LRBT', 1);
   
}
//$pdf->Text("100" , "20 ", "Reporte de Veterinaria");

/*if ($result = $conexion->query($query)) {
    while ($row = $result->fetch_assoc()) {

        $pdf->Cell(50,15,utf8_decode($row['descripcion']),1,1);

         }
}*/

// $pdf->Cell(70,15,utf8_decode('¡Hola, Mundo!'),1);
// $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'),1,2);
// $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'),1,1);
// $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'),1,1);
// $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'),1);
// $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'),1,2);
// $pdf->Cell(50,15,utf8_decode('¡Hola, Mundo!'),1);
$pdf->Output();



?>