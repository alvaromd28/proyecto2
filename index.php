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
        <a class="navbar-brand" href="index.php">
          Icsitter
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="myNavbar">
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="#"><i class="fas fa-bell"></i></a></li>
          <li><a href="#"><i class="far fa-envelope"></i></a></li>
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
            
            if (isset($_POST['submit'])){
                
                $userName = $_POST['userName'];
                $msg = $_POST['msg'];
                insert ($userName, $msg);
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
        <input type="text" name="userName" class="form-control" placeholder="Type here your username" id="usr">
        <br>
        <textarea type="text" name="msg" class="form-control msg" placeholder="Write here your comment" id="usr"></textarea>
        <br>
        <input type="submit" name="submit" class="btn btn-info" value="Enviar">
      </div>
      <div class="col-sm-4"></div>
    </div>
  </form>
</div>
</body>

</html>