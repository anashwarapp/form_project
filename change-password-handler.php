<?php
session_start();
require_once "connection.php";


$db = new PDO("mysql:host=$host;dbname=$database",$user,$pass);

if(!array_key_exists('loggedIn_user', $_SESSION)){
    header('location: sign-up.php');
}
$current_password =$_POST["current_password"];
$new_password =$_POST["new_password"];
$confirm_password=$_POST["confirm_password"];

if($current_password != $_SESSION["loggedIn_user"]["password"]){
    echo 'Current password does not match!';
    return;
}
if($new_password != $confirm_password){
    echo "New paasword does not match Confirm password!";
    return;
}

$update_password_query ="UPDATE finalss SET password=:new_pass WHERE email=:email";
$statement = $db->prepare($update_password_query);
$statement->bindParam(':new_pass', $new_password);
$statement->bindParam(':email',$_SESSION["loggedIn_user"]["email"]);
$statement->execute();

$_SESSION["loggedIn_user"] ["password"] =$new_password;
// header('location:index.php');
echo'<script>alert("Password changed succesfully!")</script>';


?>