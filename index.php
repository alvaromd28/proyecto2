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
    <body>
        <form method="POST" action="index.php">

            <input type="text" name="username">
            <br>
            <input type="password" name="password">
            <br>
            <input type="submit" name="submit" value="submit">
        
        </form>
        <form method="POST" action="formulario.html">
            <input type="submit" name="submit" value="Crear nuevo usuario">
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
    </body>
</html>