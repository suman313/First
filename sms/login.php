<?php
session_start();
?>
<?php
   $serverName="localhost";
$username="root";
$password="";
$con= mysqli_connect($serverName,$username,$password,'sms');
    if(isset($_POST['login'])){
    $user=trim($_POST['username']);
    $userpassword=trim($_POST['password']);
    $query="SELECT * FROM `admin` WHERE `username`='$user' AND `password`='$userpassword' limit 1";
    $result=mysqli_query($con,$query);
    //$row=mysql_num_rows($result);
        if($rows=mysqli_fetch_assoc($result)){
            $_SESSION['UID'] = $rows['id'];
            header("location:./admin/adminPanel.php");
        }
        else{
            ?>
                <script>
                        alert("Login is not successful. Please enter valid data");
                        </script>
<?php
        }
    mysqli_close($con);
    }
        ?>
<?php
if(isset($_SESSION['UID'])){
    header("location:admin/adminPanel.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login Page</title>
  </head>
  <body>
      <div class="jumbotron top-corner"><a href="index.php"><strong>HOME</strong></a></div>
      <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
          <div class="modal-content">
              <div class="col-sm-12 user-img">
              <img src="./styleImages/App-login-manager-icon.png">
              </div>
                            <form class="col-12" action="login.php" method="post">
                                <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter your name">
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <input type="submit" class="btn" name="login" value="Login">
                                            </div>
                                                    </form>
          
          </div><!--End of Modal content-->
          </div>
      
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>