<?php
  include 'lib/Session.php'; 
  Session::checkLogin();
  include "lib/Database.php";

  include "helpers/helper.php";
  include "inc/loginheader.php";

   $db = new Database();
    $sql_injection = new sql_injection();

?>


    		<div class="col-md-4">
             <div class="panel panel-default login-section">
			  <div class="panel-heading">
			    <h3 class="panel-title">Login</h3>
<?php
 
   if ($_SERVER['REQUEST_METHOD'] == "POST"){
		         $username =$sql_injection->getValidate( $_POST['username']);
		         $password = $sql_injection->getValidate($_POST['password']);
              $username = mysqli_real_escape_string($db->connection,$username);
              $password = mysqli_real_escape_string($db->connection,$password);
                 
              if(empty($username) || empty( $password))
              {
                echo "<span style='color:red; font-size:20px;'> Enter Field First </span>";
              }else{
                 $sql = "SELECT * FROM tbl_register WHERE name ='$username' AND password ='$password'";
                 $result = $db->select($sql);
                 if ($result != false) {
                 	
                 	$value = $result->fetch_assoc();
                                    
                     Session::set("login",true);
                     Session::set("name",$value['name']);
                     Session::set("userId",$value['usId']);
                     header("Location:index.php");
                 	}
                 
                 else{
                 		echo "<span style='color:red; font-size:20px;'> Username or Password Not Matched </span>";
               	}
               }
		   }
?>
			  </div>
			  <div class="panel-body">
	 <form action="" method="post">
	     <input type="text" name="username" placeholder="Enter username" class="form-control">	    				
	     <input type="password" name="password" placeholder="Enter password" class="form-control" style="margin-top: 10px;"><input type="submit" value="Login" class="btn btn-success" style="margin-top: 10px;">			    		
	 </form>
			  </div>
			</div>
    		</div><!--col-md-4-->
    	</div><!--row-->
    </div><!--Container-->
</body>
</html>