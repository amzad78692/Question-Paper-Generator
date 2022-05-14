<?php

    $college = $_POST['college'];
    $course = $_POST['course'];
    $dept = $_POST['dept'];
    $sem = $_POST['sem'];
    $subject = $_POST['subject'];

    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("questionpaper");

    $query = "SELECT name FROM course WHERE id = $course";
    $result = $connect->query($query) or die($connect->error);
    $row = $result->fetch_assoc();
    $course = $row['name'];

    $query = "SELECT name FROM coursedept WHERE id = $dept";
    $result = $connect->query($query) or die($connect->error);
    $row = $result->fetch_assoc();
    $dept = $row['name'];

    $query = "SELECT sname, scode FROM registerfaculty WHERE id = $subject";
    $result = $connect->query($query) or die($connect->error);
    $row = $result->fetch_assoc();
    $sname = $row['sname'];
    $scode = $row['scode'];
    $year = date('Y');

    ob_start();
    require_once "../fpdf/fpdf.php";
    $pdf = new FPDF();
    $pdf->AddPage();

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
    $pdf->Cell(0, 7, $dept, 0, 1, "C");
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
    // ob_end_flush();
?>