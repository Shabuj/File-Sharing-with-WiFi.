<?php
 include 'lib/Session.php';
 Session::checkUserSession();
  include 'lib/Database.php';  
 $db = new Database();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Sharing </title>
<link rel="stylesheet" href="css/styless.css" type="text/css" />
</head>
<body>
 <div id="body">
   <table width="80%" border="1">
    <tr>
   
   <th colspan="5"> Uploader Information </th>

    </tr>
    <tr>
    <td>No</td>
    <td> Name</td>
    <td>Department</td>
    <td>Email</td>
    </tr>
    <?php
        $db = new Database();
        if (isset($_GET['stid'])) {
         $id = $_GET['stid'];
    
    error_reporting(0);
    
     $query = "select * from tbl_register 
              where
              $id = usId";
   $result = $db->select($query);
     if ($result) {
        $i=0;
   while($data = $result->fetch_assoc())  {
        $i++;
  ?>  
        <tr>
        <td><?php echo $i; ?></td>
        
         <td><?php echo $data['name']; ?></td>
         <td><?php echo $data['Dept']; ?></td>
         <td><?php echo $data['email']; ?></td>
     
        </tr>
    <?php } } }?>
    </table>
    

    
</div>
</body>
</html>