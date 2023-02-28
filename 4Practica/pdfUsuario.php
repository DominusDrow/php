<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'mascotasDB');

//--------------------------------PDF GENERATE----------------------------//

include("./TCPDF/tcpdf.php");

  $nombre_usuario = $_SESSION['name'];
  $query = "SELECT * FROM usuarios WHERE nombre = '$nombre_usuario'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $id = $row['id'];
  $nombre = $row['nombre'];
  $telefono = $row['telefono'];
  $mascotas = $row['mascota'];

  $query = "SELECT * FROM adopciones WHERE id_usuario = '$id'";
  $result = mysqli_query($conn, $query);

 
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 20);

$pdf->Cell(0, 10, 'Información del usuario y mascotas adoptadas', 0, 1, 'C');

// Agregar información del usuario
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Información del usuario', 1, 1);
$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(0, 10, 'Nombre: ' . $nombre, 1, 1, '', 0);
$pdf->Cell(0, 10, 'Teléfono: ' . $telefono, 1, 1, '', 0);
$pdf->Cell(0, 10, 'Número de adopciones: ' . $mascotas, 1, 1, '', 0);
$pdf->Ln();

// Agregar información de las mascotas
$pdf->SetFont('helvetica', 'B', 15);
$pdf->Cell(0, 10, 'Mascotas adoptadas', 0, 0, 'C');
$pdf->Ln();


while ($row = mysqli_fetch_assoc($result)) {


    $id_mascota = $row['id_mascota'];
    $query_mascota = "SELECT * FROM mascotas WHERE id = '$id_mascota'";
    $result_mascotas = mysqli_query($conn, $query_mascota);    
    $row = mysqli_fetch_assoc($result_mascotas);

    // Agregar información de cada mascota
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(0, 10, 'Nombre: ' . $row['nombre'], 1, 1);
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(0, 10, 'Edad: ' . $row['edad'], 1, 1, '', 0);
    $pdf->Cell(0, 10, 'Raza: ' . $row['raza'], 1, 1, '', 0);
    $pdf->Cell(0, 10, 'Color: ' . $row['color'], 1, 1, '', 0);
    $pdf->Cell(0, 10, 'Sexo: ' . $row['sexo'], 1, 1, '', 0);
    $pdf->Cell(0, 10, 'Descripción: ' . $row['descripcion'], 1, 1, '', 0);

    // Agregar imagen de la mascota
    $pdf->Image($row['foto'], 150, $pdf->GetY() - 50, 50, 50, '', '', 'T', false, 300, '', false, false, 0, false, false, false);

    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
}

mysqli_close($conn);
$pdf->Output('adopcionesUsuario.pdf', 'I');

?>
