<?php

include(__DIR__."/../vendor/autoload.php");

//$date = new \DateTime();

$pdf = new \FPDF('L','mm','A4');
$pdf->AddPage();
//$pdf->SetMargins(0.5, 0.5);


$pdf->SetLineWidth(0.1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10, "Mes y anyo", "B", 2);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,8, "Ingresos", "LRB");
$pdf->Cell(30,8, "Gastos fijos", "LRB", 1);

$pdf->SetFont('Arial','',6);
$pdf->Cell(30,3, "Sueldo", "LR");
$pdf->Cell(30,3, "Alquiler/Hipoteca", "LR", 1);
$pdf->Cell(30,5, "", "LRB");
$pdf->Cell(30,5, "", "LRB", 1);
$pdf->Cell(30,3, "", "LR");
$pdf->Cell(30,3, utf8_decode("Telefonía/Internet"), "LR", 1);
$pdf->Cell(30,5, "", "LRB");
$pdf->Cell(30,5, "", "LRB", 1);
$pdf->Cell(30,3, "", "LR");
$pdf->Cell(30,3, "Luz", "LR", 1);
$pdf->Cell(30,5, "", "LRB");
$pdf->Cell(30,5, "", "LRB", 1);
$pdf->Cell(30,3, "", "LR");
$pdf->Cell(30,3, "Agua", "LR", 1);
$pdf->Cell(30,5, "", "LRB");
$pdf->Cell(30,5, "", "LRB", 1);
$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);
$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);

$pdf->SetFont('Arial','B',6);
$pdf->Cell(60,2, "", "LR", 1);
$pdf->Cell(10,3, "", "L");
$pdf->Cell(40,3, utf8_decode("¿Cuánto quiero a ahorrar?"), "LTR", 0, "C");
$pdf->Cell(10,3, "", "R", 1);
$pdf->Cell(10,5, "", "L");
$pdf->Cell(40,5, "", "LRB");
$pdf->Cell(10,5, "", "R", 1);

$pdf->Cell(60,4, "", "LR", 1);

$pdf->Cell(2,3, "", "L");
$pdf->Cell(26,3, utf8_decode("Ingresos"), "LTR", 0);
$pdf->Cell(4,3, "");
$pdf->Cell(26,3, utf8_decode("Gastos + Ahorro"), "LTR", 0);
$pdf->Cell(2,3, "", "R", 1);
$pdf->Cell(2,5, "", "L");
$pdf->Cell(26,5, "", "LBR", 0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(4,5, "-", "", 0, "C");
$pdf->Cell(26,5, "", "LBR", 0);
$pdf->Cell(2,5, "", "R", 1);
$pdf->SetFont('Arial','B',6);

$pdf->Cell(60,2, "", "LR", 1);
$pdf->Cell(15,3, "", "L", 0);
$pdf->Cell(30,3, utf8_decode("Disponible"), "LTR", 0);
$pdf->Cell(15,3, "", "R", 1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15,5, "=", "L", 0, "C");
$pdf->Cell(30,5, "", "LRB", 0);
$pdf->Cell(15,5, "", "R", 1);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(60,2, "", "LRB", 1);



$pdf->Output("F");

class CaquevoMonth {

    protected $pdf;

    public function __construct(\FPDF $pdf, $month, $year) {
        // TODO
        $this->pdf = $pdf;
    }


}
