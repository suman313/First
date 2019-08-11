<?php
session_start();
include("../dbcon.php");
    $sid = $_GET['sid']; 
    $query = "SELECT * FROM `student` WHERE `id`='$sid' limit 1";
    $insert = mysqli_query($con,$query) or die(mysql_error());
    $data = mysqli_fetch_assoc($insert);
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Update</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">


</head>

<body>
    <h1 align="center"><strong>Delete Student Below</strong></h1>
    <form action="delete.php" method="post">
   <table align="center" border="2" cellspacing="2px" cellpadding="2">
       <tr><td>Enter Roll_No:</td>
       <td><input type="number" name="rollno" value="<?php echo $data['roll_no'];?>"></td></tr>
    <tr><td>Enter Name:</td>
       <td><input type="text" name="name" value="<?php echo $data['name'];?>"></td></tr>
    <tr><td>Enter City:</td>
       <td><input type="text" name="city" value="<?php echo $data['city'];?>"></td></tr>
   <tr><td> <span>Enter Parent_Contact:</span></td>
       <td><input type="number" name="parent_contact" value="<?php echo $data['parent_contact'];?>"></td></tr>
    <tr><td><span>Enter Standard:</span></td>
       <td><input type="number" name="standard" value="<?php echo $data['standard'];?>"></td></tr>
       <input type="hidden" name="sid" value="<?php echo $sid; ?>"
    <tr><td><input type="submit" name="submit"></td></tr>   
    </table>
    </form>
    
  <script src="js/scripts.js"></script>
</body>
</html>