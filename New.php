<?php
require_once "vendor/autoload.php";
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$header = $phpWord->addSection();
$header->addText("Swami Vivekanand Subharti University",array(
                  'size'=>24, 'bold'=>true,'align'=>'center'
                  ));
$header->addText("\t\t\t\tSubject Code : BCSE-601",array(
                  'size'=>16
                  ));

$header->addText("\t\t\t\tEnrollment No. ",array(
                  'size'=>16
                  ));

$table = $header->addTable(array(
    'border' => 'single',
    'tableAlign' => 'center',
    'borderWidth' => 10,
    'tableLayout' => 'autofit', // this is the default value
    'tableWidth' => array('type' =>'pct', 'value' => 50)
));
// Add row
$table->addRow(500);
// Add cells
$table->addCell(500);
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('Question.docx');

?>