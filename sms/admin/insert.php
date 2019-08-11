<?php
session_start();
include("../dbcon.php");
if(isset($_POST['submit'])){
    
    $Roll = mysql_real_escape_string($_POST['rollno']);
    $name = mysql_real_escape_string($_POST['name']);
     $City = mysql_real_escape_string($_POST['city']);
     $Pcon = mysql_real_escape_string($_POST['parent_contact']);
     $standard = mysql_real_escape_string($_POST['standard']);
     $pass = mysql_real_escape_string($_POST['password1']);
    $_SESSION['name']= $_POST['name'];
    $query = "INSERT INTO `student`(`id`,`roll_no`, `name`, `city`, `parent_contact`, `standard`, `password1`) VALUES (NULL,'$Roll','$name','$City','$Pcon' ,'$standard','$pass')";
    $insert = mysqli_query($con,$query) or die(mysql_error());
    if($insert){
    ?>
        <script type="text/javascript">
            alert("Update Successfull.");
            window.open("adminPanel.php",'_self');
        </script>
            <?php
}
    else{
        ?>
        <script>
            alert("Data insertion is not successful");
            </script>
<?php
    }
}

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
    <h1><strong>Insert Student Below</strong></h1>
    <form action="#" method="post">
   <table align="center" border="2" cellspacing="2px" cellpadding="2">
       <tr><td>Enter Roll_No:</td>
       <td><input type="number" name="rollno"></td></tr>
    <tr><td>Enter Name:</td>
       <td><input type="text" name="name"></td></tr>
    <tr><td>Enter City:</td>
       <td><input type="text" name="city"></td></tr>
   <tr><td> <span>Enter Parent_Contact:</span></td>
       <td><input type="number" name="parent_contact"></td></tr>
    <tr><td><span>Enter Standard:</span></td>
       <td><input type="number" name="standard"></td></tr>
   <tr><td> <span>Enter Password:</span></td>
       <td><input type="password" name="password1"></td></tr>
    <tr><td><input type="submit" name="submit"></td></tr>   
    </table>
    </form>
    
  <script src="js/scripts.js"></script>
</body>
</html>