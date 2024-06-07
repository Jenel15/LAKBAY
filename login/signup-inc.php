<?php

if (isset($_POST["submit"])){
    
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdconfirm = $_POST["pwdconfirm"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if(emptyInputSignup($email, $username, $pwd, $pwdconfirm) !== false){
        header("location: ../Login/login.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !== false){
        header("location: ../Login/login.php?error=invaliduid");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../Login/login.php?error=invlaidemail");
        exit();
    }

    if(pwdMatch($pwd, $pwdconfirm) !== false){
        header("location: ../Login/login.php?error=passowrdsdontmatch");
        exit();
    }

    if(uidExists($conn, $username, $email) !== false){
        header("location: ../Login/login.php?error=usernametaken");
        exit();
    }

    createUser($conn, $email, $username, $pwd);

}
else{
    header("location: ../Login/login.php");
    exit();
}