<?php
  include 'lib/Session.php'; 
  session_start();
?>

<!DOCTYPE>
<html>
<head>
<meta  charset=utf-8" />
<title>File Sharing</title >
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<?php

 if (isset($_GET['action']) && $_GET['action'] == 'logout'){
        Session::destroy();
        header("Location:index.php");
        exit();
}
?>
<body>

<div class="header-wrap">
	<div class="logo">
		<h1 style="font-family: impact; font-size: 70px; line-height: 50%;">File Sharing</h1>
    </div>
</div><!---header-wrap-End-->

<div class="menu-wrap">

 
	<div class="menu">
		<ul>
   
        	  <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Admin</a></li>
            <li><a href="view.php">View Files</a></li>
    <?php
       $login = Session::get("login");
       if ( $login == true) { 
    ?>
         <!--<li><a href="upload_file.php">Upload</a></li> -->

         <li><a href="?action=logout">Logout</a></li>
     <?php } ?>  

        <?php 
            if ( $login == false) { 
          ?> 
            <li><a href="stulogin.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php }  ?>  
           <?php 
           /*
            if (Session::get('userId')){
              */
            ?>
            

            
           
          
        </ul>
    </div>
    
    <div class="socia-wrap">
	<div class="socail">
		<ul>
        	<li><a href="#"><img src="images/aim.png" alt="" /></a></li>
        	<li><a href="https://www.facebook.com/deptofcsepust/"><img src="images/facebook.png" alt="" /></a></li>
            <li><a href="#"><img src="images/twwtter.png" alt="" /></a></li>
            <li><a href="#"><img src="images/linkedin.png" alt="" /></a></li>
		</ul>
	</div>
</div>
</div><!---menu-wrap-End-->

<div class="banner-wrap">
	
    	<div class="banner-img"><img src="images/s.jpg" alt=""  style="height: 370px; width: 1000px;" /></div>
    
    <div class="shadow"></div>
</div><!---banner-wrap-End-->

<div class="footer-wrap">
  <div class="wrap">
    <div class="panel marRight30">
      <div class="title">
        <h1>About Developer</h1>
          <p> 
           Hi, I am Md.Shabuj Hossain . I am the developer of this project. I am Studing at Dept. of CSE,PUST. I am passionate to learn WEB Developing. For more Details :-
        </p>
        <h2><a href="https://www.facebook.com/profile.php?id=100010172446848">Click Here</a></h2>
      </div>
      <div class="content">
        <div class=""> </div>
      </div>
    </div>
    
    <div class="panel">
      <div class="title">
        <h1>Contact us </h1>
      </div>
      <div class="cotact">
        <ul>
          <li><img src="images/icon6.png" alt="" />0731-64876</li>
          <li><img src="images/icon7.png" alt="" /><a href="cse@pust.ac.bd">cse@pust.ac.bd</a></li>
          <li><img src="images/icon8.png" alt="" />Dept. Of CSE PUST</li>
        </ul>
      </div>
    </div>
    <div class="clearing"></div>
  </div>
</div><!---footer-wrap-->
<div class="clearing"></div>
<div class="copyright-wrap">
	<div class="wrap">
    	<div class="content">
        <p>Copyright (c) File Sharing with Wifi. All rights reserved.
        <<a href="http://www.pust.ac.bd/academic/departments/cse/cse.html" class="active"> Dept. of CSE,PUST</a> > 
        
        </div>
	</div>
</div><!---copyright-wrap-End-->
</body>
</html>
