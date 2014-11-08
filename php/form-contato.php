<?php
session_start();

include("php-mailer/class.phpmailer.php");
/*
Name: 			Contact Form
Written by: 	Okler Themes - (http://www.okler.net)
Version: 		3.1.0
*/


// Enter your email address below.
$to = 'kobukan@kobukan.com.br';

$arrResult = array('response'=>'');

if(isset($_POST['emailSent'])) {

	$subject = "[contato enviado pelo site] ".$_POST['subject'];
	//$subject = $_POST['subject'];

	// Step 2 - If you don't want a "captcha" verification, remove that IF.
	// if (strtolower($_POST["captcha"]) == strtolower($_SESSION['captcha']['code'])) { <------- não estou usando captcha pra enviar e-mail.

		$name = $_POST['name'];
		$email = $_POST['email'];

		// Step 3 - Configure the fields list that you want to receive on the email.
		$fields = array(
			0 => array(
				'text' => 'Nome',
				'val' => $_POST['name']
			),
			1 => array(
				'text' => 'E-mail',
				'val' => $_POST['email']
			),
			2 => array(
				'text' => 'Menssagem',
				'val' => $_POST['message']
			)
		);

		$message = "";

		foreach($fields as $field) {
			$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
		}

		$mail = new PHPMailer;

		$mail->IsSMTP();

		// Step 4 - If you don't receive the email, try to configure the parameters below:

		//$mail->Host = 'mail.yourserver.com';				  // Specify main and backup server
		//$mail->SMTPAuth = true;                             // Enable SMTP authentication
		//$mail->Username = 'username';             		  // SMTP username
		//$mail->Password = 'secret';                         // SMTP password
		//$mail->SMTPSecure = 'tls';                          // Enable encryption, 'ssl' also accepted

		$mail->From = $email;
		$mail->FromName = $_POST['name'];
		$mail->AddAddress($to);
		$mail->AddReplyTo($email, $name);

		$mail->IsHTML(true);

		$mail->CharSet = 'UTF-8';

		$mail->Subject = $subject;
		$mail->Body    = $message;

		// Step 5 - If you don't want to attach any files, remove that code below
		// if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
		// 	$mail->AddAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
		// }

		if($mail->Send()) {
		   $arrResult['response'] = 'success';
		} else {
			$arrResult['response'] = 'error';
		}

	// } else {

	// 	$arrResult['response'] = 'captchaError';

	// }

}
?>
