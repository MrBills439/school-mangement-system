<?php


ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('display_startup_errors','on');
ini_set('error_reporting',E_ALL);

function checkEmptyInputs($usersName, $userEmail, $passwrd, $confirmPassword, $userRole){
    if(empty($usersName) || empty($userEmail) || empty($passwrd) || empty($confirmPassword) || empty($userRole)){
        return true;
    } else {
        return false;
    }
}