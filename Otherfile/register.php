
<!DOCTYPE html>
<html lang="en">
<?php
include '../shared/head.php';
?>
<body>
<footer style="position: fixed;top:0;z-index:800;left:70%">
<p style="color: white;" class="txt"> already have an acoount?</p>
<p><a href="../Otherfile/login.inc.php">Log In</a></p>
 </footer>
<footer style="position: fixed;bottom:0;z-index:800;left:6%">
<a href="#"> About</a> <a href="#">Support</a> <a href="#">2022</a>
 <a href="#">Community</a> <a href="#">By Trapps</a></p>
<p><a href="../index.php">Home</a></p>
 </footer>
<div class="make-form">
    <form action="register.inc.php" method="POST" style="box-shadow: 0px 0px 12px 0px #302e4d">

<p style="color:#888;"> <h3>Register </h3></p>
<div class="cover-make" style="margin-bottom: 10px;">
<button>Add profile pic </button>
</div>
   <div class="details">
    <div >
        <input type="text" name="name" id="title" placeholder="name"style="width: 150px; margin-right: 10px;" > 
            <input type="text" name="surname" id="title" placeholder="surname" style="width: 140px;" >  
    </div>
    <div>
    <input type="text" name="username" id="title" placeholder="username" > 
    </div>
    <div>
    <input type="text" name="email" id="title" placeholder="email" > 
    </div>
    <div>
    <input type="number" name="phone" id="title" placeholder="Phone +263" > 
    </div>
    <div>
    <input type="text" name="password" id="title" placeholder="Password" > 
    </div>
    <div>
    <input type="text" name="confirm" id="title" placeholder="Confirm Password" > 
    </div>
   
    <p style="color:#888;">Edit Business Site</p>


   
    <div >
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Describe your busienss..."></textarea>
    </div>
    <p style="color:#888;">Location</p>
    <div>
        <input type="text" name="location" placeholder="City" style="width: 150px; margin-right: 10px;">
        <input type="text" name="street_name" placeholder="street name" style="width: 140px; margin-right: 10px;">
    </div>
    <div>
        
    </div>
 
        <button name="done" class="create-listing-btn" style="width: 100%;">
            Done
        </button>
    </div>




    </form>

</div>

</body>
-
</html>