<?php
session_start();
require_once 'connection.php';

$db = new PDO("mysql:host=$host;dbname=$database",$user,$pass);




$first_name = $_POST["first_name"];
$last_name= $_POST["last_name"];
$building_name = $_POST["building_name"];
$street_address = $_POST["street_address"];
$pin_code = $_POST["pin_code"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$gender=$_POST["gender"];
$qualification=$_POST["qualification"];
$Hobby=$_POST["Hobby"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];



if($password != $confirm_password){ ?>
password do not match! please try again. <a href="sign-up.php">Go back</a>
<?php 
}

$query=$db->prepare("SELECT * FROM finalss WHERE email= ?");
// $query=bindParam(':email',$email);
$query->execute([$email]);
$result=$query->rowCount();

if($result > 0){

    echo'<script>alert("Email already exists!")</script>';
    
    die();
}

 


 

$insert_query = "INSERT INTO finalss (first_name, last_name, building_name, street_address, pin_code, phone_number, email, gender,qualification,Hobby,password) VALUES (:first_name, :last_name, :building_name, :street_address, :pin_code, :phone_number, :email, :gender,:qualification,:Hobby ,:password)";
$statement= $db->prepare($insert_query);
$statement-> bindParam(':first_name',$first_name);
$statement-> bindParam(':last_name',$last_name);
$statement-> bindParam(':building_name',$building_name);
$statement-> bindParam(':street_address',$street_address);
$statement-> bindParam(':pin_code',$pin_code);   
$statement-> bindParam(':phone_number',$phone_number);
$statement-> bindParam(':email',$email);
$statement-> bindParam(':gender',$gender);
$statement-> bindParam(':qualification',$qualification);
$statement-> bindParam(':Hobby',$Hobby);
$statement-> bindParam(':password',$password);
$statement->execute();

$read_new_user_query = "SELECT * FROM finalss WHERE email=:email";
$statement = $db->prepare($read_new_user_query);
$statement-> bindParam(':email',$email);
$statement->execute();

$user= $statement->fetch(PDO::FETCH_ASSOC);
$_SESSION['loggedIn_user']=$user;
header('location:index.php');
?>

?>