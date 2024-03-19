<?php
session_start();
require_once 'connection.php';
$db = new PDO("mysql:host=$host;dbname=$database",$user,$pass);

$email = $_POST['email'];
$password = $_POST['password'];

$user_select_quary = "SELECT * FROM finalss WHERE email=:email";
$statement= $db->prepare($user_select_quary);
$statement-> bindParam(':email',$email);
$statement->execute();

$user = $statement->fetch(PDO::FETCH_ASSOC);

if(!$user){
    echo "User with the entered email does not exist";
    return;
}

if($password != $user['password']){
    echo "Incorrect password!";
    return;
}
$_SESSION['loggedIn_user']=$user;
header('Location:index.php');
?>