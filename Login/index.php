<html>
<head> <title> index </title></head>
<body>
<center>
<?php
session_start();
if(isset($_GET["error"]))
   echo $_GET["error"]."<h3>";
?>
<form action= "check.php"><br>
Email ID <input type="email" name='t1'><br><br>
Password <input type="password" name='t2'><br><br>
<input type="submit">
</form>
</center>
</body>
</html>