<?php
require("fpdf/fpdf.php");
require("conexion.php");

date_default_timezone_set('America/Mexico_City');

$fechaActual = date("d-m-Y");

$query =  "SELECT * FROM tipodePago";


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

$pdf->Cell(15,10, "No.", 'LR', 0);
$pdf->Cell(50,10, "Mascota", 'LR', 0);
$pdf->Cell(50,10, "Vacuna", 'LR', 0);
$pdf->Cell(80,10, "Diagnostico", 'LR', 1);
 

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