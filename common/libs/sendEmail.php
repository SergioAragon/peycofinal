<?php 

namespace common\libs;
use common\libs\PHPMailer;


class sendEmail{
	function sendEmail($sendEmail, $subject, $body="no body"){
            $mail= new PHPMailer();
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'AdmiPeyco@gmail.com';
            $mail->Password ="123AdmiPeyco";
            $mail->SMTPSecure='ssl';
            $mail->Port = 465;
            $mail->isHtml(true);
            $mail->CharSet = 'UTF-8';

            $mail->setForm('from@example.com', 'Mailer');
            if (is_array($sendEmail)) {
            	foreach ($sendEmail as  $value) {
            	$mail->AddAddress($value);
            	}
            }else{
            	$mail->AddAddress($sendEmail);
            }
$mail->Subject= $subject;
     $mail->body = $Body;
     if ($mail->send()) {
      echo "message could not be sent";
      echo "mailer Error: ". $mail->ErrorInfo;
     }else{
     	echo "Message has been sent";
     }

	}
	

}