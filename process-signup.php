<?php

if(empty($_POST["Fullname"])){
    die("Full name is required");
}

if(empty($_POST["username"])){
    die("User name is required");
}
if(!filter_var($_POST["emailaddress"],FILTER_VALIDATE_EMAIL)){
    die("Email Address not in proper format");
}


if(isset($_POST["gender"])=="0"){
    die("Gender should be male or female");
}
if(empty($_POST["phonenumber"])){
    die("Phone Number is required");
}
if(empty($_POST["password"])){
    die("Password is required");
}
if(strlen($_POST["password"]) <8){
    die("Password should be atleast 8 characters long");
}
if(!preg_match("/[a-z]/i",$_POST["password"])){
    die("Password Must have atleast one character");
}
if(!preg_match("/[0-9]/",$_POST["password"])){
    die("Password must have atleast one number");
}

if($_POST["password"] !== $_POST["Confirm_password"]){
    die("Password do not match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO userInfo (fullname, username, email, gender, phonenumber,isactive, password_hash)
        VALUES (?, ?, ?, ?, ?, '1', ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssss",
                  $_POST["fullname"],
                  $_POST["username"],
                  $_POST["email"],
                  $_POST["gender"],
                  $_POST["phonenumber"],
                  $_POST["isactive"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

