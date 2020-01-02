<?php
 include 'lib/Session.php';
 Session::checkUserSession();
  include 'lib/Database.php';  
   //include "helpers/helper.php";
  // include "inc/loginheader.php";
 $db = new Database();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload and View</title>
<link rel="stylesheet" href="css/styless.css" type="text/css" />
</head>
<body>
    <div id="header">
<label>File Upload and View</label>
</div>

    <div id="body">
    <table width="80%" border="1">
    <tr>
   <!-- <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>-->
   <th colspan="7">Uploaded Files</th>

    </tr>
    <tr>
    <td>No</td>
    <td>File Name</td>
    <td>Files</td>
    <td>Type</td>
    <td>Uploader Name</td>
    <td>View</td>
    
    </tr>
     <?php
         $db = new Database();
        if (isset($_GET['search'])) {
         $name = $_GET['search'];

       
        $query = "select tbl_uploads.*, tbl_register.* 
               from tbl_uploads
               inner join tbl_register
               on tbl_uploads.usId = tbl_register.usId  and (tbl_register.name LIKE '%$name%' OR tbl_uploads.file_name LIKE '%$name%' OR tbl_uploads.file LIKE '%$name%' OR tbl_uploads.type LIKE '%$name%')";
         
   
     $result = $db->select($query);
     if ($result) {
        $i=0;
     while($data = $result->fetch_assoc())  {
        $i++;
    ?>  
        <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['file_name']; ?></td>
        <td><?php echo $data['file']; ?></td>
        <td><?php echo $data['type']; ?></td>
        <td><a href="student_info.php?stid=<?php echo $data['usId']; ?>" target="_blank"> <?php echo $data['name']; ?> </a></td>
        <td><a href="uploads/<?php echo $data['file'] ?>" target="_blank">view file</a></td>
     
        </tr>
     <?php } } } ?>
     </table>
     
      </div>
        

</body>
</html>