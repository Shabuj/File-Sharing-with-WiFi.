<?php include 'lib/Database.php'; ?>
<?php include 'lib/Session.php';
Session::checkUserSession(); 
  $db = new Database();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>File Sharing with WiFi</title>
<link rel="stylesheet" href="css/styless.css" type="text/css" />
</head>
<body>

<div id="header">
	<label> File Upload and View </label>
</div>
<div id="body">
	
	<form action="" method="post" enctype="multipart/form-data">

<?php
  
  if(isset($_POST['btn-upload']))
    { 
    
    $userid    = $_POST['userid'];
    $file_name= $_POST['file_name'];
	$file    = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc  = $_FILES['file']['tmp_name'];
	//$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	
	$folder="uploads/";

	//$new_size = $file_size/1024;  
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
  {
    $sql="INSERT INTO 
          tbl_uploads(file_name,file,type,usId) 
          VALUES('$file_name','$final_file','$file_type','$userid')";

		$result = $db->insert($sql);
		if ($result) {
		echo "<span style='color:green;'> File uploaded successfully</span>";
		}else{
	  echo "<span style='color:red;'> Sorry try again</span>";
		}
	  }
	}		
?>
<input type="text" name="file_name" placeholder="Enter File Name" class="form-control">
<input type="file" name="file" placeholder="Enter File" class="form-control">
<input type="hidden" name="userid" value="<?php  echo Session::get('userId'); ?>" />
	<button type="submit" name="btn-upload">Upload</button>
	<button><a href="index.php" style="color: red; ">Back</a></button>
	</form>

    <br /><br />
   
   
   
</div>
<div id="footer">

</div>
</body>
</html>