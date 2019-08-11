<?php 
session_start();
if(!($_SESSION['UID'])){
    header("location:../login.php");
}
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>
<body>
    
        <h1 class="style">Admin Panel</h1>
    <table align="center" border="5px solid green" cellspacing="5" cellpadding=15 width="50%">
         <tr><td><a href="insert.php"><Div>Insert</Div></a></td></tr>
         <tr><td><a href="updateStudent.php"><Div>Update</Div></a></td></tr>
         <tr><td><a href="deleteStudent.php"><Div>Delete</Div></a></td></tr>
    </table>
    <div class="topcorner">
    <a href="../logout.php">Logout</a>
        </div>
    <div><?php
        if(isset($_SESSION['name'])){
        echo "The student named ".$_SESSION['name']." has been registered successfully.";
        }
        ?></div>
    </body>
</html>