<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
	
	//Page header
	public function Header() {
		// Logo
		$this->Rect(0, 0, 2000, 20,'F',array(),array(68, 44, 96));
		$this->SetTextColor(255,255,255);
		$this->WriteHTML('<div style="font-size:38px;text-align:right">Telephone: + 971 50 3840164<br/>Email: myemail@example.com</div>');
		$image_file = K_PATH_IMAGES.'vlogo.png';
		$this->Image($image_file, 10, 2, 70, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica', 'N', 11);
		// Title

	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

?>
