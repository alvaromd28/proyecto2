<?php
    // Start the session
    session_start();

    if (isset($_POST['logout'])){
        session_unset(); 
        session_destroy(); 
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
            // Set session variables
            echo "Este es el nombre de usuario ".$_SESSION["username"] = "Silver";
        ?>
            <form action="main.php" method="POST"> 
                <input type="submit" value=" log out" name="logout">
            </form>
        

    </body>
</html>