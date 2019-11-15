<?php require("includes/helpers.php"); ?> 
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="buttons.css">

<?php
    require("templates/forgot_password_backend.php");
?>
<div class="container">
	    <div class="boxed-view">
        <div class="boxed-view__box">
        <h1>Forgot Password</h1>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" class="boxed-view__form" method="post" >
			<input type="email" name="email" class="form-control" required="true" placeholder="Registered email">
            <button type="submit" id="submit" name="submit" class="btn btn-warning"> Submit</button>
		</form>
	    </div>
        </div>
