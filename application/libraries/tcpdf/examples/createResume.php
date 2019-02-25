<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2010-11-20
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               Manor Coach House, Church Hill
//               Aldershot, Hants, GU12 4RQ
//               UK
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('doughstack');
$pdf->SetTitle('doughstack');
$pdf->SetSubject('Resume');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font


$pdf->AddPage();

$html = <<<EOF
<table  border="0" style="width:860px;" cellpadding="0" cellspacing="0" >
	
    <tr background="#4e4e4e">
    	<td width="200px" valign="top" bgcolor="#f7f7f7" align="center">
                <table cellpadding="0" cellspacing="8">
                    <tr>
                        <td valign="top"><img src="../images/userpic.png" style="border:8px solid #fff;"></td>
                    </tr>
                  
                </table>
       </td>
        <td valign="top" bgcolor="#f7f7f7">
        	<table cellpadding="3" cellspacing="0" border="0" style="width:573px">
            	<tr>
                	<td colspan="2" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:54px; color:#3c3c3c; font-weight:bold;">Jhon Smith</td>
               	</tr>
                <tr>
                	<td colspan="2" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#265d01;">MBA, BS, Diploma in Graphics 5-6 Years</td>
               	</tr>
                <tr>
                	<td width="135" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold">Email :</td>
                	<td style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;">john.smith@yahoo.com</td>
               
                </tr>
                <tr>
                	<td width="135" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold">Country :</td>
                	<td style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;">United State</td>
               
                </tr>
                <tr>
                	<td width="135" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold">State :</td>
                	<td style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;">New York</td>
               
                </tr>
                <tr>
                	<td width="135" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold">Zip Code :</td>
                	<td style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;">606552</td>
               
                </tr>
				
                <tr>
                	<td width="135" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold">Work Experience :</td>
                	<td style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;">5 - 6 years</td>
               
                </tr>
                
				 <tr>
                	<td width="135" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold"></td>
                	<td style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;"></td>
               
                </tr>
				
				
				<tr>
                	<td colspan="2"  bgcolor="#e0e0e0" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:40px; color:#265d01;padding:10px;">Experience Details</td>
               	</tr>
               
                <tr>
               	  <td colspan="2" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;font-weight:bold;padding-left:10px;" >Associate Project Manager</td>
                </tr>
                 <tr>
                	<td colspan="2" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;padding-left:10px;">X-Y-Z Technologies<br>
August 2012 – Present (6 months)<br>
Leading projects on Android, iPhone, & Facebook applications.<br>
</td>
                </tr>
                 <tr>
                	<td  bgcolor="#e0e0e0" colspan="2" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:40px; color:#265d01;">Skills</td>
               	</tr>
               <tr>
                	<td width="135" colspan="2" style="font-family:Tahoma, Geneva, sans-serif;
                    font-size:30px; color:#4e4e4e;padding-left:10px;">Project Manager, Creative Director, and Developer</td>
                </tr>
                
            </table>
      </td>
    </tr>
</table>

EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
$filename = date('YmdHis').'.pdf';
//Close and output PDF document
$pdf->Output($filename, 'F');

//============================================================+
// END OF FILE                                                
//============================================================+
