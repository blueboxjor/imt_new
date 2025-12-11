<?php
include "../includes/functions.php";
require_once('tcpdf_include.php');

// create new PDF document

$pdf = new TCPDF(PDF_PAGE_ORIENTATION_LAND, PDF_UNIT, PDF_PAGE_FORMAT_A8, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
// set auto page breaks

// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'ltr';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);
// set LTR direction for english translation
$pdf->setRTL(false);

$pdf->SetFontSize(8);

// print newline
$pdf->Ln();
$pdf->SetFont('aealarabiya');

//test
// $pdf->SetMargins(3, 15, 3);
$pdf->SetMargins(3, 8, 3,FALSE);
$pdf->SetAutoPageBreak(TRUE, 0);

// add a page
$i=0;

$pdf->AddPage();
$htmlcontent ='<table cellpadding="5" border="1" width="100%">';
$htmlcontent.= '
<tr>
<th>Code 1:  </th>
<th>Base Code :</th>
</tr>
';
$htmlcontent .= '</table>';

// $htmlcontent ="<h1>Leaders</h1>";
$pdf->WriteHTML($htmlcontent,true, false, true, false, '');

ob_end_clean();
//Close and output PDF document
$pdf->Output('test.pdf', 'I');

?>