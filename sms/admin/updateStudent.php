<?php 
session_start();
if(!(isset($_SESSION['UID']))){
    header("location:../login.php");
}


?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>Student Update</title>
        <link rel="stylesheet" type="text/css"  href="../css/upSt.css">
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>
    <body>
        <div>
    <form action="updateStudent.php" method="post">
        <table align="center" width="auto" height="auto" border="2px" padding="10px">
        <tr>
            <th>ENTER STANDARD</th>
            <td><input type="number" name="standard" placeholder="Enter standard"></td>
            </tr>         
            <tr><th>ENTER STUDENT NAME</th>
                        <td><input type="text" name="stuname" placeholder="Enter Student Name"></td></tr>
                            <tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>                
            
            </tr>
        </table>
        </form>
        </div>
     <div class="topcorner">
    <a href="../logout.php">Logout</a>
        </div>
    <div class="updateStudent">
    <table align="center" border="1px" cellpadding="10px" margin="10px">
    <tr><th>Serial No.</th>
        <th>Roll NO.</th>
        <th>Name</th>
        <th>City</th>
        <th>Parent Contact</th>
        </tr>
        
    <?php
    include("../dbcon.php");
    if(isset($_POST['submit'])){
        $standard = $_POST['standard'];
        $stuname = $_POST['stuname'];
        $query = "SELECT * FROM `student` WHERE `standard`= '$standard' AND `name` LIKE '%$stuname%' limit 1";
        $result = mysqli_query($con,$query);
        $count =0;
        while($row=mysqli_fetch_assoc($result)){
            $count++;
            ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['roll_no']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['parent_contact']; ?></td>
                        <td><a href="updateForm.php?sid=<?php echo $row['id']; ?>"><input type="button" value="Edit"></a></td>
                
                </tr>
    
    </table>
            </div>
    <?php
        }
    }
    ?>
    
    </body>
</html>