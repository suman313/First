<?php
session_start();
?>
<!DOCTYPE html>
<html lan="en">
<head>
<meta charset="UTF-8">
<style>
body{
	  background-image: url("/sms/dataimages/Awesome-Nature-Background.jpg");
  background-position: 50% 50%;
  background-repeat: repeat;
  background-color:yellow;
}
.form-structure{
	color:blue;
background-color:pink;
text-align:center;
border-style:solid;
border-width:5px;
border-color:green;
padding: 20px 45px 20px 45px;
margin:25px 50px 75px 50px;
}
.adminStyle{
box-shadow:0 10px 30px rgb(45,45,45,.9);
padding: 20px 45px 20px 45px;
margin:20px 50px 75px 1050px;
background-color:skyblue;

}


</style>
<title>Home</title>
</head>
<body>
<div>
<div class="adminStyle">
<a href="login.php" ><h2 style="text-align:right-top;">Admin Login</h2></a> 
</div>
<div class="form-structure">
<section>
<h3>Student Information</h3>
</section>
<form name="form" action="./admin/studentinfo.php" method="post">
<section>
Student RollNo.:<input type="text" name="rollNo" placeholder="  RollNumber">
</section>
<section>
Student Password:<input type="password" name="password" placeholder="Password">
</section>
<section>
Standard:<select name="standard">
			<option value="1st">1st</option>
			<option value="2nd">2nd</option>
			<option value="3rd">3rd</option>
			<option value="4th">4th</option>
			<option value="5th">5th</option>
			<option value="6th">6th</option>
            <option value="7th">7th</option>
            <option value="8th">8th</option>
            <option value="9th">9th</option>
            <option value="10th">10th</option>
            <option value="11th">11th</option>
            <option value="12th">12th</option>
		</select>
		</section> 
		<div>
		<input type="submit" name="submit"></input>
		<input type="reset"></input>
			</div>
		</form>
</div>
</div>
<div style="text-align:center;background-color:grey;border-style:solid;margin:10px 25px 10px 25px;">
<h2>New user?</h2>
<a href="Register.php"><h3>Register Here</h3></a>
</div>
<div>
<?php
if(isset($_SESSION['name']))
{
echo $_SESSION['message'];
echo $_SESSION['name'];
}
?>
</div>
</body>

</html>