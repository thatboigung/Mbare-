<?php
function checkLogIn () {
    if (isset($_SESSION['users']))
          return true;
    else return false;      
 }
 
 if ($User=checkLogIn() === false) {
  header('location: index.php');   
 }
session_start();
session_destroy();
header("Location: ../index.php");