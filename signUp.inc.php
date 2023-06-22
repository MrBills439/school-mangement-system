<?php

ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('display_startup_errors','on');
ini_set('error_reporting',E_ALL);

require_once "functions.php";
include "includes.php";

if(isset($_POST["registerNow"])){

    $usersName = sanitize($_POST["name"]);
    $userEmail = sanitize($_POST["email"]);
    $passwrd = sanitize($_POST["password"]);
    $confirmPassword = sanitize($_POST["cpassword"]);
    $userRole = sanitize($_POST["user_type"]);

    



    if(checkEmptyInputs($usersName, $userEmail, $passwrd, $confirmPassword, $userRole) !==false){
        echo "You have empty fields. Fill them.";
    } else {
        header("location: signUp.php");
    }


} else{
    header("location: signUp.php");
}