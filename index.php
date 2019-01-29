<?php

  session_start();

  function exist_user ($username, $password){
    if ($username == 'silver' && $password == '1234'){
      return true;
      }
    return false;
    }
  
  if (isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (exist_user ($username, $password)){
      $_SESSION["username"] = $username;
      header('Location: main.php');
    }
  }
        
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-inverse mainnavbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="main.php">
          Icsitter
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="myNavbar">
          <li><a href="main.php"><i class="fas fa-home"></i></a></li>
          <li><a href="#"><i class="fas fa-bell"></i></a></li>
          <li><a href="#"><i class="far fa-envelope"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li>
           <a type="button" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span> Login </a>
        </li>
        
      </ul>
      </div>
    </div>
  </nav>
  <div class="col-sm-1"></div>
  <div class="col-sm-10 bienvenido">
    <center>
      <h1>ICSITTER</h1>
      <h3>En esta pagina podrás seguir todo lo que te interesa y también hablar con tus amigos ¿A qué esperas para unirte? </h3>
    </center>
  </div>
  <div class="col-sm-1"></div>


</body>

</html>




<center>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="img/avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="index.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" name = "submit" href="main.php" class="btn-lg buttonColor color btn-block">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				¿No tienes una cuenta? Pincha <a href="register.php">aqui</a> para registrate
			</div>
		</div>
	</div>
</div>     
</center>

<!--Ho