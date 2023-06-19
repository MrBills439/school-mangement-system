<?php

ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('display_startup_errors','on');
ini_set('error_reporting',E_ALL);


if(isset($_POST["registerNow"])){

    $usersName = $_POST["name"];
    $userEmail = $_POST["email"];
    $passwrd = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];
    $userRole = $_POST["user_type"];

    require_once "functions.php";



    if(checkEmptyInputs($usersName, $userEmail, $passwrd, $confirmPassword, $userRole) !==false){
        echo "You have empty fields. Fill them.";
    } else {
        header("location: signUp.php");
    }


} else{
    header("location: signUp.php");
}