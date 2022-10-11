<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeJobs||Mbare</title>
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
    $page ='jobs';
    include_once '../shared/aside.php';
    ?>
    <!-- ==== Aside Ends -===== -->
          <!-- main content start -->
    <div class="main-content">

<!-- Home Section Start -->
<section class="home section">
 <nav class="nav-section">

    <div class="category"><span><i class="fa fa-list-dots"></i></span></i> Category 
        <span style="margin-left:15px ;">|</span></div>
<div class="search-box">
    <input type="text" class="search-txt" name="search" placeholder="What are you searching for..">
<a href="../Otherfile/searchResults.html" class="search-btn">
    <i class="fa fa-search"></i>
</a>
</div>
<div class="uer-signup">
    <div>
        <a href="#"><i class="fa fa-user-circle " ></i><span> Join <span class="dev">|</span> </span> <small class="free">.Its free</small></a>
    </div>
    <div>
        <a href="#"><i class="fa fa-message"></i> <small class="message">Messages <span class="dev">|</span></small> </a>
    </div>
    <div>
        <a href="#"><i class="fa fa-circle-dollar-to-slot"></i> <small class="message"> Orders</small></a>
    </div>
</div>
 </nav>
 <div class="main-item-job">
    <div class="cats">

        <div class="profile-p"> Latest</div>  
        <div class="profile-p">FullTime</div>  
        <div class="profile-p">Contract</div>   
        <div class="profile-p">Acconting</div>  
        <div class="profile-p">Advertising&Marketing</div>  
        <div class="profile-p">Sales&Retail</div>  
        <div class="profile-p">Science&Engineering</div>  
        <div class="profile-p">BusinessOperations</div> 
        <div class="profile-p">ManPower</div>  
        
     </div>
    <div class="heading" >
        Jobs  <span></span>
    </div>
    <div class="jobs">
       <div class="wrapper-job">
    
    <div class=" box">One</div>
    <div class=" box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="box-cloth-1 box">Five</div>
    <div class="box-del box">Six</div>
</div>
<div class="job-desc">
<section>
    Job Desc
</section>
</div>  
    </div>
  
 </div>

</section>
<!-- Home Section Ends -->
  
    </div>
<!-- main content ends -->
<footer>
    <a href="#"> About</a> <a href="#">Support</a> <a href="#">2022</a>
    <p> <a href="#">Community</a> <a href="#">By Trapps</a></p>
    
     </footer>
</div>
    <!-- Main contaeiner Ends -->
    <!-- js Files -->
    <script src="js/script.js"></script>
</body>
</html>