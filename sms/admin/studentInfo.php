<?php
include("../dbcon.php");
if(isset($_POST['submit'])){
    $Roll =($_POST['rollNo']);
    $stpass = ($_POST['password']);
    $standard = ($_POST['standard']);
    $query = "SELECT * FROM `student` WHERE `password1`='$stpass' and `roll_no`='$Roll' and `standard`='$standard' limit 1";
    $run = mysqli_query($con,$query);
    if($row=mysqli_fetch_assoc($run)){
        ?>
            <table align="center" border="1px solid red" cellpadding="10px" height="50%" width="50%">
                    <tr>
                <th>Student Id</th>
                        <th>Roll NO.</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Parent Contact</th>
                        <th>Standard</th>
                </tr>
                <tr>
                    <td><?php echo $row['id'];?> </td>
                    <td><?php echo $row['roll_no'];?> </td>
                    <td><?php echo $row['name'];?> </td>
                    <td><?php echo $row['city'];?> </td>
                    <td><?php echo $row['parent_contact'];?> </td>
                    <td><?php echo $row['standard'];?> </td>
                </tr>
                        </table>
        <?php
    }
}
?>
<!DOCTYPE HTML>
<html>
<head><title>Student Information</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    </head>
    <body>
    
    <div class="topcorner">
        <a href="../index.php"><strong>Home Page</strong></a>
        </div>
    
    </body>

</html>