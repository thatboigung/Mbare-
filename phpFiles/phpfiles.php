<?php
include '../classes/dbh.inc.php';

 $user_id =$_SESSION['users']['id'] ?? null;
 $name=$_SESSION['users']['name'] ?? null;
$email =$_SESSION['users']['email'] ??null;
$phone =$_SESSION['users']['phone'] ?? null;

$selectProf=$pdo('SELECT * FROM users where id=:id ');
$selectProf->execute([':id'=>$user_id]);
$logged_user=$selectProf;