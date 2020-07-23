<html>
<head>
<title> abc </title>
</head>
<style>
h3 {
	color: #18c3bc; text-align: center; font-size: 100px;
	text-shadow: 13px 16px 20px #00b1ff, 3px 3px #f0f50a;
     } 
body	{
	 background-image: linear-gradient(to right bottom, #0bceef, #ff0012, #0fe828);
	}
.btn
	 {
	  color: #ec84ec;
	  width: 113px;
	  height: 113px;
	  font-size: 66px;
	  text-align: center;
	  background-color: #0ed885;
	  border-width: 6px;
          border-style: inset;
          border-color: #0ddfeafc;
	  border-radius: 66px;
	 }
.btn:hover { background-color: #e49a9a; color: black; }
</style>
<center>
<body>
<?php
session_start();
if(isset($_SESSION["log"]))
  {
    echo "<h1>WELCOME Back<h1>";
 ?>

<h3> Welcome to my page!!!</h3>
 <a href="index.php?error=Logged out successfully"><input type="submit" value="Go" class="btn"> </a>
<?php
 }
else
  
  header("location:index.php?error=login first");
?>
?>
</body>
<html>

