<?php
	if (isset($_POST["submit"]) && $_POST["email"]!='') {
		session_start();
		$email=$_POST["email"];
		$user_type=$_POST["user_type"];
		$query="SELECT * FROM registration WHERE `email` = '$email'";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		//if email exists send email 
		if ($count==1) {

			$password = uniqid();
			$hash_password=password_hash($password,PASSWORD_DEFAULT);		
			$upd_query="UPDATE registration SET `password`='$hash_password' WHERE `email`='$email'";
			$updresult = mysqli_query($con,$upd_query);
			require(__DIR__."/../mailer/forgot_password_mail.php");
			echo "<script type='text/javascript'>alert('Check your email to recover password!')
					window.location.href='forgot_password.php';</script>";
		}
		else{
			//display error that email does not exists
			echo "<script type='text/javascript'>alert('Email does not exists!')
					window.location.href='forgot_password.php';</script>";
		}
	}

?>