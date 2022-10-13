<?php 
 
include_once '../classes/dbh.inc.php';

if(isset($_POST['done'])){
$desc = $_POST['desc'];
$location =$_POST['loaction'];
$street_name=$_POST['street_name'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$Cpassword=$_POST['confirm'];
if($password !== $Cpassword){
    $errorMsg[0][]='Passwords don match';
  }
  if(strlen($password)<6){
    $errorMsg[0][]='Password must be at least 6 charecters';

  }
  
if(empty($errorMsg)){
 
    $select=$pdo->prepare("SELECT * FROM users WHERE email=:email and username=:username");
    $select->execute([':email'=>$email,':username'=>$username]);
    $row=$select->fetch(PDO::FETCH_ASSOC);

    $selectU=$pdo->prepare("SELECT * FROM users WHERE  username=:username");
    $selectU->execute([':username'=>$username]);
    $rowU=$select->fetch(PDO::FETCH_ASSOC);

    if($select->rowCount()>0){
      $errorMsg[0][]='email already exists , Log in instead';
    }
    else if($selectU->rowCount()>0){
      $errorMsg[0][]='Username Taken, Choose Anotherone';
    }else{
      $hashpass=password_hash($password,PASSWORD_DEFAULT);
      $created=new DateTime();
      $created=$created->format('Y-m-d H:i:s');

      $insert=$pdo->prepare("INSERT INTO users(name,surname,username,email,phone,password,created)
      VALUES(:name,:surname,:username,:email,:phone,:password,:created)");
      if(
        $insert->execute(
          [
            ':name'=>$name,
            ':surname'=>$surname,
            ':username'=>$username,
           
            ':email'=>$email,
            ':phone'=>$phone,
            ':password'=>$password,
            
            ':created'=>$created,
          ]
        )

      ){
    
header("Location: ../index.php?msg=Registration Successful");
    }

  }
}

}else{
    header('Location: register.php');
}


?>