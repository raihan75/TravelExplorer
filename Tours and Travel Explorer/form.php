<?php require 'database.php';
session_start();
require("fpdf/fpdf.php");
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","B","16");

	

    $pdf->Cell(0,10,"", 0,1);
    $pdf->Cell(0,10,"", 0,1);
    $pdf->Cell(0,10,"", 0,1);

	$pdf->Cell(0,10,"GCE - Gas Control Equipment", 1,1);
?>