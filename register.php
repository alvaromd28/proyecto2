<?php
        
        require_once('util/validator.php');
        require_once('util/db_manager.php');
                
        if (isset($_POST['submit'])){
            if(($_POST['password']) == ($_POST['confirm_password'])){
                if(checkName($_POST['first_name']) &&
                checkName($_POST['last_name']) &&
                checkUserName($_POST['user_name']) &&
                checkEmail($_POST['email']) &&
                checkDate2($_POST['date']) &&
                checkPasswords($_POST['password'])
                ){
                    insert_user($_POST['user_name'], $_POST['first_name'], $_POST['last_name'], $_POST['date'], $_POST['email'], $_POST['password']);
                    header('Location: index.php');
                }
                else{
                   echo '<h1> Datos mal introducidos </h1>';
                }
            }
            else{
                echo '<h1> Las contraseñas no son iguales </h1>';
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
<div class="signup-form contenedor">
    <form action="register.php" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="user_name" placeholder="User Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" value = "Pas$w0rd1" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value = "Pas$w0rd1" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="submit" class="buttonColor btn  btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="index.php">Sign in</a></div>
</div>
</body>
</html>                            