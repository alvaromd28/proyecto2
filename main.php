<?php
function exist_user ($username, $password){
  if ($username == 'silver' && $password == '1234'){
      return true;
  }
  return false;
}
session_start();
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

<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <div class="panel">
        <div class="panel-heading primary text-center">
          <h1> Your timeline </h1>
        </div>
        <div class="panel-body text-center scroll">
          <?php
            require_once('util/db_manager.php');
            
            if (isset($_POST['enter'])){
                
                $userName = $_POST['userName'];
                $msg = $_POST['msg'];
                insert_msg ($userName, $msg);
            }
            get_msg();
          ?>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>

  <form method="POST" action="#">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 text-center">
        <input type="text" name="userName" class="form-control" placeholder="Type here your username" id="usr" required>
        <br>
        <textarea type="text" name="msg" class="form-control msg" placeholder="Write here your comment" id="usr" required></textarea>
        <br>
        <button type="submit" name="enter" class="btn buttonColor color btn-lg">Enviar   <i class="fab fa-telegram-plane"></i></button>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </form>
</div>
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
				<form action="main.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" name="submit" href="main.php" class="btn-lg buttonColor color btn-block">Login</button>
					</div>
        </form>
        <?php
            if (isset($_POST['submit'])){
                $username = $_POST["username"];
                $password = $_POST["password"];

                if (exist_user ($username, $password)){
                    echo '<h1 style="color: green;"> EL USUARIO EXISTE </h1>';
                    $_SESSION["username"] = $username;
                    echo '<a href="main.php"> GO MAIN </a>';
                }
                else{
                    echo '<h1 style="color: red;"> EL USUARIO NO EXISTE </h1>';
                }
            }
        ?>
			</div>
			<div class="modal-footer">
				¿No tienes una cuenta? Pincha <a href="register.php">aqui</a> para registrate
			</div>
		</div>
	</div>
</div>     
</center>
