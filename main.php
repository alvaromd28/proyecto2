<?php
    require_once('util/db_manager.php');
    if (isset($_POST['submmit'])){
        $userName = $_POST['name'];
        $msg = $_POST['text'];
        insert ($userName, $msg);
    }
    get_msg();
?>
