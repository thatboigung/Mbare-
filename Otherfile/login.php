<?php
include '../classes/dbh.inc.php';

session_start();
 
if (isset($_POST['log-in'])){
    $email = $_POST['email'];
$password =$_POST['password'];
$select=$pdo->prepare("SELECT * FROM users WHERE email=:email LIMIT 1 ");
$select->execute(['email'=>$email]);
$row=$select->fetch(PDO::FETCH_ASSOC);




if($select->rowCount() > 0){

   if($password==$row["password"]){
   $_SESSION['users']['name']=$row['name'];
   $_SESSION['users']['phone']=$row['phone'];
   $_SESSION['users']['email']=$row['email'];
   $_SESSION['users']['id']=$row['id'];
   $_SESSION['users']['username']=$row['username'];
   $_SESSION['users']['surname']=$row['surname'];
   $_SESSION['users']['profile']=$row['profile_pic'];
    header("Location: ../index.php?msg=Loged-in");
   }else{
  $errorMsg[]='Wrong Password';
  header('location: login.inc.php?msg=wrong password'); 
   }
}else{
  $errorMsg[]='Wrong Email ';
  header('location: login.inc.php?msg=failed,wrongemail'); 
  
}}else{
   header('location: ../index.php?failed'); 
}


?>