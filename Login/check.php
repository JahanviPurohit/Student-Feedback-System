<html>
<head><title> check </title></head>
<body>
<?php
$con=mysqli_connect("localhost:3306", "root", "", "lab");
session_start();
$e=$_GET["t1"];
$p=$_GET["t2"];
$query=mysqli_query($con, "Select pw from stdreg where email='$e'");
$row1=mysqli_fetch_array($query);
if( $r==$row1['pw']){
    $_SESSION["log"]="12345";
    header("location: index.php");
    echo "Logged in successfully";
   }
else
header("location: index.php?error=Invalid Details");
?>
</body>
<html>
