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

    function insert_user ($userName, $name, $first_surname, $second_surname, $birthday, $mail, $phone, $gender, $reg_date){
        $val = "'$userName', '$name', '$first_surname', '$second_surname, '$birthday', '$mail', '$phone', '$gender', '$reg_date'";
        $sql = "INSERT INTO user (userName, name, first_surname, second_surname, birthday, mail, phone, gender, reg_date) VALUES (".$val.")";
        $conn = dbConnect("localhost","root","","icsitter");
        $conn->query($sql);
    }

    function insert_msg ($msg, $user_id){
        $sql = "INSERT INTO msg (msg,user_id) VALUES (".$msg.")";
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
                echo $row["user.userName"]. ": " . $row["msg"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    function get_user (){
        $user = $_POST["userName"];
        $password = $_POST["password"];
        $sql = "SELECT userName, password from user where userName = '$user' and password = '$password'";
        $conn = dbConnect("localhost","root","","icsitter");
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return true;
            }
        } else {
            return false;
        }

    }
?>
   
