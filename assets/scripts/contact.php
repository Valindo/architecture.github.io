<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
  header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
  // require 'phpmailer/PHPMailerAutoload.php';
  // date_default_timezone_set('Asia/Calcutta');
  // $date = date('Y-m-d H:i:s');
	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $phone = $_POST['phone'];
  // $message = $_POST['message'];
  // $mail = new PHPMailer;
  // $mail->setFrom('noreply@urbanalchemygoa.com', $name . " - " . $phone);
  // $mail->addAddress('nagarjunkinare@gmail.com', 'Nagarjun Kinare');
  // $mail->Subject  = "Urban Alchemy Website Contact";
  // $mail->Body     = $message;
  // if(!$mail->send()) {
  //   echo "There was an error processing your request.";
  //   echo 'Mailer Error: ' . $mail->ErrorInfo;
  // } else {
  //   echo '1';
  // }

  print_r($_POST)

?>