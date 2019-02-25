<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use \setasign\Fpdi\Fpdi;


class studentForms extends CI_Controller {
	public $inputValues="";
	public $formValues = array();
	public $numberRows = array(12,24,36,48,60,72,84,96,120,132);
    
    
    public function index()
	{
		echo "Heloo Saim Ahmed. ";
	}
	public function usiForm(){
		 $formRows = array();
		 $count = 0;
		// $name = trim($this->input->post('one'));
		// $email = trim($this->input->post('two'));
		// $subject = trim($this->input->post('three'));
		// $message = nl2br(trim($this->input->post('four')));
		// // echo $name,$email,$subject,$message;

		$this->inputValues= array_keys($this->input->post());
		for($j = 0; $j < count($this->numberRows); $j++){

			for($i = $count; $i < $this->numberRows[$j]; $i++){
				array_push($this->formValues,$this->input->post($this->inputValues[$i]));
				$count = $i+1;
			}
			array_push($formRows,$this->formValues);
			$this->formValues = array();
		}
		print_r($formRows[0]);
		print_r($formRows[1]);
		print_r($formRows[2]);
		print_r($formRows[3]);
		
    }
}



