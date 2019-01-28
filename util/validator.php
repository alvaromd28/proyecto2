<?php
    function checkName ($letter){
        if(!preg_match("/^[a-zA-Z\s]*$/", $letter)){
            return false;
        }
        else{
            return true;
        }
    } 

    function checkEmail ($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false; 
        }
        else{
            return true;
        }
    }

    function checkPasswords ($password){
        if(checkLength ($password) && 
            checkNumbers ($password) &&
            checkLetters ($password) &&
            checkSpecialCharacters ($password)){
                return true;
            }
            else {
                return false;
            }
    }

    function checkLength ($password){
        if(preg_match("/.{9,}/",$password)){
            return true;
        }
        else{
            return false;
        }
    }

    function checkNumbers ($password){
        if(preg_match("/[0-9]+/",$password)){
            return true;
        }
        else{
            return false;
        }
    }

    function checkLetters ($password){
        if(preg_match("/[a-zA-Z]+/",$password)){
            return true;
        }
        else{
            return false;
        }
    }

    function checkSpecialCharacters ($password){
        if(preg_match("/[\W]+/",$password)){
            return true;
        }
        else{
            return false;
        }
    }

    function checkDate ($date){
        if(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)){
            return true;
        }
        else{
            return false;
        }
    }

    function checkUserName ($name){
        if(!preg_match("/[a-zA-Z0-9\s]{3,15}/", $name)){
            return false;
        }
        else{
            return true;
        }
    }
?>