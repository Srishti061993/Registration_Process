<?php
     use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require("Exception.php");
    require ("PHPMailer.php");
    require("SMTP.php");
try{
   include 'connection.php';
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["contact"];
    $university = $_POST["university"];
    $college = $_POST["college"];
    $course = $_POST["course"];
    $year = $_POST["year"];
    $pass=$_POST["password"];
    $password = md5($pass);
    
    $st= $conn->prepare("SELECT * FROM registration WHERE Email= :email");
    $st->bindParam(':email', $email);
    $st->execute();
    //{echo "User with this email id has already registered"; }
    $stmt = $conn->prepare("INSERT INTO registration(Name,Email,Mobile,University,College,Course,Year,Password) 
    VALUES (:name, :email, :mobile, :university, :college, :course, :year, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':university', $university);
    $stmt->bindParam(':college', $college);
    $stmt->bindParam(':course', $course);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':password', $password);
    
    $stmt->execute();
    echo "Inserted Successfully";

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
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
    $mail->addAddress($email);     // Add a recipient
    $mail->addReplyTo('innerve@gmail.com', 'Innerve');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hello Welcome to innerve';
    $mail->Body    = 'Hello '.$name.',<br><br>Congratulations, You are now successfully registered for Innerve. You can Login using your email'.$email.' and Password:'.$pass.'. <br><br> Regards<br>Innerve 2k18';
    echo "<script> alert('Mail sent')</script>";    
    if (!$mail->send()) {
        throw new Exception("Error Processing Request", 1);
        }
    }
    catch (Exception $e) {
        if($e->getCode() == 23000) echo "<script> alert('User already registered. Please login.')</script>";
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $e->ErrorInfo;
}

?>
