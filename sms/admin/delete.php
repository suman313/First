<?php
session_start();
include("../dbcon.php");
if(isset($_POST['submit'])){
    
    $Roll = mysql_real_escape_string($_POST['rollno']);
    $name = mysql_real_escape_string($_POST['name']);
     $City = mysql_real_escape_string($_POST['city']);
     $Pcon = mysql_real_escape_string($_POST['parent_contact']);
     $standard = mysql_real_escape_string($_POST['standard']);
     $id = $_POST['sid'];
   
    $query = "DELETE FROM `student` WHERE `id`='$id' limit 1";
    $insert = mysqli_query($con,$query) or die(mysql_error());
    if($insert){
        ?>
        <script type="text/javascript">
            alert("Student Deleted Successfully.");
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

