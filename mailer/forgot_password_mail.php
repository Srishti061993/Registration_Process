<!-- Executing phpmailer!-->
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

	require("Exception.php");
    require ("PHPMailer.php");
    require("SMTP.php");


	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
    $mail->SMTPDebug= 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rtvproj@gmail.com';                 // SMTP username
    $mail->Password = 'bunny123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('innerve@gmail.com', 'Innerve');
    $mail->addAddress("r137bhatia@gmail.com");     // Add a recipient
    $mail->addReplyTo('innerve@gmail.com', 'Innerve');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hello Welcome to innerve';
    $mail->Body    = 'Hello,<br><br>You can Login using this<br><br>Password:<br>. You can further change this password from your profile.<br><br> Thanks<br>Pik Education';
    
    if (!$mail->send()) {
        throw new Exception("Error Processing Request", 1);
        }
	} 
	catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $e->ErrorInfo;
}
?>