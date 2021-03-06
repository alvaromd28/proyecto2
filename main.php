<?php

  session_start();

  require_once('util/db_manager.php');
  
  $username = $_SESSION['userName'];

  if (isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (get_user ($username, $password)){
      $username = $_SESSION['userName'];
      header('Location: main.php');
    }
  }
  
  if (isset($_POST['logout'])){
    session_unset(); 
    session_destroy();
    header('Location: index.php');
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
          <form method="POST" action="#">
            <li>
              <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                  <button type="submit" name="logout" class="btn btn-danger btn-sm" style="margin-top: 10px;"> Logout </button>
                </div>
                <div class="col-sm-4"></div>
              </div>
            </li>
          </form>
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
                $msg = $_POST['msg'];
                insert_msg ($msg);
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