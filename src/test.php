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
$pdf->Cell(30,8, "Gastos", "LRB", 1);

$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);
$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);
$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);
$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);
$pdf->Cell(30,8, "", "LRB");
$pdf->Cell(30,8, "", "LRB", 1);


$pdf->Output("F");

class CaquevoMonth {

    protected $pdf;

    public function __construct(\FPDF $pdf, $month, $year) {
        // TODO
        $this->pdf = $pdf;
    }


}
