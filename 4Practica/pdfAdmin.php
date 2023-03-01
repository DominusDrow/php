<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'mascotasDB');

//--------------------------------PDF GENERATE----------------------------//

include("./TCPDF/tcpdf.php");
 
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 20);

$pdf->Cell(0, 10, 'Información del los usuarios', 0, 1, 'C');

$query = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $query);    

while ($row = mysqli_fetch_assoc($result)) {
  if($row['nombre'] != 'admin'){

    // Agregar información de cada mascota
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(0, 10, 'Nombre: ' . $row['nombre'], 1, 1);
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(0, 10, 'Telefono: ' . $row['telefono'], 1, 1, '', 0);
    $pdf->Cell(0, 10, 'Adopciones: ' . $row['mascota'], 1, 1, '', 0);

    // Agregar imagen de la mascota
    $pdf->Image("./src/usuario.png", 179, $pdf->GetY() - 20, 20, 20, '', '', 'T', false, 300, '', false, false, 0, false, false, false);

    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
  }
}

mysqli_close($conn);
$pdf->Output('adopcionesUsuario.pdf', 'I');

?>
