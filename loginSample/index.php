<?php

    function exist_user ($username, $password){
        if ($username == 'silver' && $password == '1234'){
            return true;
        }
        return false;
    }


    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php

            if (isset($_POST['submit'])){
                // Set session variables
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

        <form method="POST" action="index.php">

            <input type="text" name="username">
            <br>
            <input type="password" name="password">
            <br>
            <input type="submit" name="submit" value="submit">
        
        </form>
    </body>
</html>