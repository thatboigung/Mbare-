
<div class="aside">
    <div class="logo">
        <a href="#"><span>M</span>bare<span style="font-size: 13px;"> Online</span></a>  
    </div>
    <div class="nav-tongler">
        <span></span>
    </div>
    <ul class="nav">
        <li><a href="../index.php" class="<?php if($page=='home'){ echo 'active' ;} ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="../Market/homemarket.php" class="<?php if($page=='market'){ echo 'active' ;} ?>"><i class="fa fa-search-dollar"></i> Market</a></li>
        <li><a href="../Services/servicehome.php" class="<?php if($page=='service'){ echo 'active' ;} ?>"><i class="fa fa-seedling"></i> Services</a></li>
        <li><a href="../Jobs/jobshome.php" class="<?php if($page=='jobs'){ echo 'active' ;} ?>"><i class="fa fa-briefcase"></i> Jobs</a></li>
        <li><a href="../Anyalyse/analysehome.php" class="<?php if($page=='analyse'){ echo 'active' ;} ?>"><i class="fa fa-chart-bar"></i> Analyse</a></li>
    </ul>
    <?php if ($User=checkLogIn() === true) { ?>
    <div class="user">
        <a href="../Profile/profilehome.php" class="<?php if($page=='home'){ echo 'active' ;} ?>"><i class="fa fa-user"></i> Profile</a>
    </div>
    <?php } ?>
    
</div>