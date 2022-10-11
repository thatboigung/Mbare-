<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home||Mbare</title>
    <!-- Css file -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- Main contaeiner start -->
<div class="main-container">
    <!-- ==== Aside Start -===== -->
    <?php 
    $page ='search';
include_once '../shared/aside.php';
?>
    <!-- ==== Aside Ends -===== -->
          <!-- main content start -->
    <div class="main-content">

<!-- Home Section Start -->
<section class="home section">
<?php include_once '../shared/nav.php';?>
 <div class="main-item">

     <div class="cats">
        <div class="profile-p">All</div>  
        <div class="profile-p">Wholesale</div>
        <div class="profile-p">Retail</div>
        <div class="profile-p">Ships to you</div>  
        <div class="profile-p">Near Me</div>  
        <div class="profile-p" style="background-color:#504e70;"></div>
        <div class="profile-p">Brand New</div>
        <div class="profile-p">Good Condition</div>
     </div>
<div class="heading">
        Search Resulst <span></span>
</div>
<div class="wrapper-items">
    <div class="   box">One</div>
    <div class="box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="   box">One</div>
    <div class="box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="   box">One</div>
    <div class="box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    </div>











    
 </div>
 <footer>
<a href="#"> About</a> <a href="#">Support</a> <a href="#">2022</a>
<p> <a href="#">Community</a> <a href="#">By Trapps</a></p>

 </footer>
</section>
<!-- Home Section Ends -->
  
    </div>
<!-- main content ends -->
</div>
    <!-- Main contaeiner Ends -->
    <!-- js Files -->
    <script src="../js/script.js"></script>
</body>
</html>