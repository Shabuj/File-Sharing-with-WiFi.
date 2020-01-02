<?php
  include 'lib/Session.php'; 
  include 'lib/Database.php'; 
  //Session::checkSession(); 
  session_start();
  $db = new Database();
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
            <li><a href="s_view.php">View Files</a></li>
    <?php
       $login = Session::get("login");
       if ( $login == true) { 
    ?>
         <li><a href="upload_file.php">Upload</a></li>
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

<div>
  <div>
    <table style="margin: 0 auto;">

 <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
    {   
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  
  if(empty($name) && empty($password) && empty($email)){
    echo "<span style='color:white;'>Please fill out this field first</span>";
  }
  else
  {
    $sql="INSERT INTO 
         teacher (name,password,email) 
         VALUES('$name','$password','$email')";

    $result = $db->insert($sql);
    if ($result) {
    echo "<span style='color:green;'>Registration successfully done</span>";
    }else{
    echo "<span style='color:red;'>Sorry try again</span>";
    }
    
   } 
  } 
?>
      <form action="" method="post">
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" placeholder="Enter Teacher name"></td>
        </tr>
         <tr>
          <td>Password:</td>
          <td><input type="password" name="password" placeholder="Enter Teacher password"></td>
        </tr>
         <tr>
          <td>Roll:</td>
          <td><input type="text" name="email" placeholder="Enter Email"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </form>
    </table>
  </div>
</div>
<!--
<div class="banner-wrap">
  
      <div class="banner-img"><img src="images/s.jpg" alt=""  style="height: 370px; width: 1000px;" /></div>
    
    <div class="shadow"></div>
</div><!-banner-wrap-End-->



<!---copyright-wrap-End-->
</body>
</html>
