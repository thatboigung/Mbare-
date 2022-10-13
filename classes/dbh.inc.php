<?php

// class dbh{
   

//     protected function connect(){
   
//         $pdo=new PDO('mysql:host=localhost;port=3306;dbname=campusdatabase','root','');
//  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $pdo;
//     }
// }

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=mbare','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);