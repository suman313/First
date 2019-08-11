<?php
$serverName="localhost";
$username="root";
$password="";
$con= mysqli_connect($serverName,$username,$password,'sms');
if(!$con)
{
die("connection failed:".mysqli_connect_error());
}
?>