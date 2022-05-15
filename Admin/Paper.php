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

    $time = $_POST['time'];
    $maxmark = 0;
    $module = $_POST['module'];

    for ($i=1; $i <= $module; $i++) { 
        $maxmark += $_POST['m'.$i];
    }
    

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
    $pdf->Cell(0, 7, '[Time : '.$time.' Hours]', 0, 0, "L");
    $pdf->Cell(0, 7, '[Max. Marks : '.$maxmark.']', 0, 1, "R");
    
    $pdf->Cell(0, 7, "Note/Instructions:", 0, 1, "L");
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 7, "i)   Attempt all questions.", 0, 1, "L");
    $pdf->Cell(0, 7, "ii)  Marks are indicated against each section.", 0, 1, "L");
    $pdf->Cell(0, 7, "iii) Assume missing data if any.", 0, 1, "L");

    // Printing questions.
    for ($i=1; $i <= $module; $i++) { 
        $pdf->SetFont('Arial', 'B', 12);
        $any = $_POST[$i] - $_POST['opt'.$i];
        $pdf->Cell(0, 7, "Ques.".$i." Answer the following. (Any ".$any.")", 0, 0, "L");
        $pdf->Cell(0, 7, "(".$any."*".$_POST['m'.$i]/$any."=".$_POST['m'.$i].")", 0, 1, "R");
        $pdf->SetFont('Arial', '', 12);

        $query = "SELECT question FROM question WHERE scode = '".$scode."' and marks = '".($_POST['m'.$i]/$any)."' ORDER BY rand() LIMIT $_POST[$i]";
        $result = $connect->query($query) or die($connect->error);
        $j=1;
        while($data = $result->fetch_assoc()){
            $pdf->Cell(0, 7, $j.". ".$data['question'], 0, 1, "L");
            $j++;
        }
        
    }

    $pdf->output();
    // ob_end_flush();
?>