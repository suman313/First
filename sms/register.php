
<?php
session_start();
//connenting to the database
$serverName="localhost";
$username="root";
$password="";
$con= mysqli_connect($serverName,$username,$password,'sms');
//getting the form datas if user click the submit button
if(isset($_POST['submit']))
{
	
	$Rollno= mysql_real_escape_string($_POST['rollno']);
	$Name= mysql_real_escape_string($_POST['name']);
	$City=mysql_real_escape_string($_POST['city']);
	$Contact= mysql_real_escape_string($_POST['contact']);
	$Standard=mysql_real_escape_string($_POST['standard']);
	$Password1=mysql_real_escape_string($_POST['password1']);
	$Password2= mysql_real_escape_string($_POST['password2']);
	//if two passwords match then getting the data into the database
	if($Password1==$Password2){
	 $sql="INSERT INTO `student`(`id`, `roll_no`, `name`, `city`, `parent_contact`, `standard`, `password1`) VALUES (NULL,'$Rollno','$Name','$City','$Contact','$Standard','$Password1')";
	 $run=mysqli_query($con,$sql);
	 
	 $_SESSION['message']="You are now registered";
	 $_SESSION['name']=$Name;
	 header("location:index.php");
	}
	else{
		?>
			 <script type="text/javascript">
			 alert("two paaswords do not matched");
			 </script>
			<?php
			
}
}
?>
<DOCTYPE html>
<html lan="en">
<head>
<title>User Register</title>
<meta charset="UTF-8">
<style>

</style>
</head>
<body>
<div>
<form name="register" action="register.php" method='post'>
<table align="center" >
<tr>
<td>Student RollNumber:</td>
<td><input type="text" name="rollno" placeholder="RollNumber" required></td>
</tr>
<tr>
<td>Student Name:</td>
<td><input type="text" name="name" placeholder="Student_Name"></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="city" placeholder="City"></td>
</tr>
<tr>
<td>Parent Contact:</td>
<td><input type="text" name="contact" placeholder="Parent Contact" required></td>
</tr>
<tr>
<td>Standard:</td>
<td><input type="text" name="standard" placeholder="Standard" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password1" required></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="password2" required></td>
</tr>
<tr>
<td>Photo:</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="register"></td>
<td><input type="reset"></td>
</tr>
</table>
</form>
</div>
</body>
</html>