<?php
require_once "vendor/autoload.php";
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
$section->addText("Swami Vivekanand Subharti University",array(
                  'size'=>24, 'bold'=>true,'align'=>'center'
));

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('Question.docx');

?>