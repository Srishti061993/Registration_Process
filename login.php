<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-state=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="js/showpassword.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
	<script type="text/javascript">
	$("#password").password('toggle');
	</script>

</head>
<body>
	<img id="bg" src="../img/background-3009949_1920.jpg" alt="error">
	<div class="container-fluid" id="bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form id="form1" method="post" action="#">
					<h1 style="color:white">Login Form</h1>
					<div id="mess"> </div>
					<div class="form-group inputWithIcon">
						<label>Email</label>
						<div class="input-group">
    						<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
					</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group col-xs-12">
    						<span class="input-group-addon"><i class="fas fa-lock"></i></span>
						<input type="password" class="form-control" placeholder="Password" name="password" id="password" data-toggle="password" style="width:100%;margin: auto;" required>
						</div>
					</div>
					<div class="checkbox">
						<a style="color:white;float:right;" href="" >Forgot Password?</a>
					</div><br><br>
					<button type="submit" class=" btn-success btn-block" name="login">Login</button><br>
					<div class="form-group">
						<label style="color:white;font-size: 15px;font-weight: normal;">If new user?</label>
						<button type="submit" class=" btn-success btn-block" style="width:100px; float:right;"><a href="sign_up.html" style="color:white;" >Sign up</a></button><br>
				</div>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>


<?php
session_start();
/*if(!empty($_SESSION['username'])) {
header('location:plan.php');
}
*/
require 'connection.php';


if(isset($_POST['login'])) {

$user = $_POST['email'];
$pass = md5($_POST['password']);

if(empty($user) || empty($pass)) {
echo 'All field are required';
} else {
$query = $conn->prepare("SELECT email, password FROM registration WHERE 
email=? AND password=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $user;
 echo "login successful";
 // header('location:plan.php');
} else {  echo "<script> document.getElementById('mess').innerHTML='Username/Password Incorrect'</script>";
  echo "Username/Password is wrong";
}


}

}
?>

</body>
</html>