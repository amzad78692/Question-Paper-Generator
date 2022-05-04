<?php
    ob_start();
    require_once "fpdf/fpdf.php";
    $pdf = new FPDF();
    $pdf->AddPage();

    $course = 'B.Tech (CSE-HONS)';
    $sem = 'III';
    $year = date('Y');
    $scode = 'BCME-501';
    $sname = 'INTRODUCTION TO CLOUD COMPUTING';

    $pdf->SetFont('Arial', 'B', 24);
    //         width, height, text, border, new line, align
    $pdf->Cell(0, 10, "Swami Vivekanand Subharti University", 0, 1, "C");
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 7, "Enrollment Number ", 0, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 0, "C");
    $pdf->Cell(10, 7, "", 1, 1, "C");

    $pdf->Cell(0, 7, $course, 0, 1, "C");
    $pdf->Cell(0, 7, $year.' YEAR '.$sem.' SEM EXAMINATION', 0, 1, "C");
    $pdf->Cell(0, 7, $sname, 0, 1, "C");
    $pdf->Cell(0, 7, 'Subject Code - '.$scode, 0, 1, "C");
    $pdf->Cell(0, 7, '[Time : 3:00 Hours]', 0, 0, "L");
    $pdf->Cell(0, 7, '[Max. Marks : 70]', 0, 1, "R");
    
    $pdf->Cell(0, 7, "Note/Instructions:", 0, 1, "L");
    $pdf->Cell(0, 7, "i)   Attempt all questions.", 0, 1, "L");
    $pdf->Cell(0, 7, "ii)  Marks are indicated against each section.", 0, 1, "L");
    $pdf->Cell(0, 7, "iii) Assume missing data if any.", 0, 1, "L");

    $pdf->output();
    ob_end_flush();
?>