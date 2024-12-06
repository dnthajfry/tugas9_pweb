<?php
// memanggil library FPDF
require_once 'phpfpdf/fpdf.php';
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'No',1,0);
$pdf->Cell(65,6,'NAMA PENDAFTAR',1,0);
$pdf->Cell(35,6,'JENIS KELAMIN',1,0);
$pdf->Cell(50,6,'SEKOLAH ASAL',1,1);

$pdf->SetFont('Arial','',10);

include 'config.php';
$mahasiswa = mysqli_query($db, "select * from calon_siswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['id'],1,0);
    $pdf->Cell(65,6,$row['nama'],1,0);
    $pdf->Cell(35,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(50,6,$row['sekolah_asal'],1,1); 
}

$pdf->Output();
?>