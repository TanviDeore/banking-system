<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'grip_bank';

$con = mysqli_connect($server,$username,$password,$db);
if($con){
  
   ?>
   
   <?php
}
else{
   // echo("No connection");
   die("no connection".mysqli_connect_error());
}
?>