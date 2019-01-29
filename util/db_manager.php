<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "icsitter";

    function dbConnect ($servername, $username, $password, $dbname){
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
           return false;
        }
        return $conn;
    }

    function insert_user ($userName, $name, $first_surname, $birthday, $mail, $password){
        $val = "'$userName', '$name', '$first_surname', '$birthday', '$mail', '$password'";
        $sql = "INSERT INTO user (userName, name, first_surname, birthday, mail, password) VALUES (".$val.")";
        $conn = dbConnect("localhost","root","","icsitter");
        $conn->query($sql);
    }

<<<<<<< HEAD
    function insert_msg ($msg, $user_id){
        
        $sql = "INSERT INTO msg (msg,user_id) VALUES (".$msg.")";
=======
    function insert_msg ($msg, $user){
        $user_id = "SELECT user.id from user where user.userName = '".$user."'";
        $sql = "INSERT INTO msg (msg,user_id) VALUES (".$msg.",".$user_id.")";
>>>>>>> b8f13608a64f92764530b652837795a340407e6d
        $conn = dbConnect("localhost","root","","icsitter");
        $conn->query($sql);
    }

    function get_msg (){
        $sql = "SELECT msg.msg, user.userName from msg
        JOIN user ON user.id = msg.user_id
        ORDER BY id.msg DESC LIMIT 20";
        $conn = dbConnect("localhost","root","","icsitter");
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo  $row["msg"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    
    function get_user ($userName, $password){
        $sql = 'SELECT * from user where userName = "'.$userName.'" and password = "'.$password.'"';
        $conn = dbConnect("localhost","root","","icsitter");
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['userName'] = $row['userName'];
                return true;
            }
        } else {
            return false;
        }
    }
?>
   
