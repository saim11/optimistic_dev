<?php

class EmailModel extends CI_Model {
public function __construct(){
        parent::__construct();
	   
	   $this->load->library('PHPMailer/phpmailer');
  	   //$this->emailHost = EMAIL_HOST;
	   //$this->sendFrom = EMAIL_SENDER_NAME;
   	   //$this->sendFromEmail = EMAIL_ADDRESS;
	   $this->emailHost = "smtp.gmail.com";
	   $this->sendFrom = "OF";
   	   $this->sendFromEmail = "maju.mail.system@gmail.com";
    }

public function sendEmail($name, $to, $subject, $body, $attach=""){
 		$mail             = new PHPMailer();
   		$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->Host       = $this->emailHost;      // sets GMAIL as the SMTP server
   		$mail->SetFrom($this->sendFromEmail, $this->sendFrom);
		$mail->AddReplyTo($this->sendFromEmail, $this->sendFrom);
		$mail->Subject    = $subject;
		$mail->MsgHTML($body);
		$mail->AddAddress($to, $name);

		if($attach!="")
		{
		$mail->AddAttachment($attach);      // attachment
		}

		if(!$mail->Send()) {
		  return "Error";
		} else {
		  return "Sent";
		}
}


public function sendEmailLocal($name, $to, $subject, $body, $attach=""){
 		$mail             = new PHPMailer();
   		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
		$mail->Username   = "maju.mail.system@gmail.com";  // GMAIL username
		$mail->Password   = "@dmin!23";            // GMAIL password
   		$mail->SetFrom("maju.mail.system@gmail.com", "Maju Mail");
		$mail->AddReplyTo("maju.mail.system@gmail.com", "Maju Mail");
		$mail->Subject    = $subject;
		$mail->MsgHTML($body);
		$mail->AddAddress($to, $name);

		if($attach!="")
		{
		$mail->AddAttachment($attach);      // attachment
		}

		if(!$mail->Send()) {
			return "Error";
		} else {
		  return "Sent";
		}	
}




}

?>