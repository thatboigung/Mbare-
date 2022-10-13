<?php


session_start();
  function checkLogIn () {
    if (isset($_SESSION['users']))
          return true;
    else return false;      
 }

 $name=$_SESSION['users']['name'] ?? null;
$email =$_SESSION['users']['email'] ??null;
$phone =$_SESSION['users']['phone'] ?? null;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home||Mbare</title>
    <!-- Css file -->
   
    <?php
include '../css/style.php';
   ?>
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>