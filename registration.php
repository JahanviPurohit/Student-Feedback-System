<html>
<title>Registration</title>
<head>
    <script></script>
</head>
<body bgcolor="sky blue">
<?php
$con=mysqli_connect("localhost:3306", "root", "", "lab");
?>
<center>
<font size=15 color="gold"><B> Registration for Students</B></font>
<br>
<hr width=800>
<form action="">
<input type="reset">
<br><br>
<table cellspacing="1" cellpadding="2">
<tr>
<td>  Scholar Number </td>
<td><input type="text" name='sch_no' autocomplete='off'></td>
</tr>
<tr>
<td> Name </td>
<td><input type="text" name='name' placeholder='Complete Name' autocomplete='off'></td>
</tr>
<tr>
<td> Department</td>
<td>
		<select name="dept" required>
			<option value="">Select Department</option>
			<option value="CSE">CSE</option>
            <option value="CIVIL">CIVIL</option>
			<option value="CHEMICAL">CHEMICAL</option>
			<option value="ELECTRICAL">ELECTRICAL</option>
            <option value="ECE">ECE</option>
			<option value="MECHANICAL">MECHANICAL</option>
			<option value="SCIENCE">SCIENCE</option>
		</select> </td>
</tr>
<tr>
<td>  Email ID</td>
<td><input type="email" name='email' placeholder='Enter valid email'></td>
</tr>
<tr>
<td> Password</td>
<td><input type="password" name='pw' placeholder='Enter valid password'></td>
</tr>
<tr>
<td>Course </td>
<td><select name="course" required>
		<option value="">Select Course</option>
			<option value="B.TECH">B.Tech</option>
			<option value="M.TECH">M.Tech</option>
			<option value="Ph.D">Ph.D</option>
        </select> </td>
</tr><tr>
        <td>Semester </td> 
        <td><select name="sem" required>
		<option value="">Select Semester</option>
			<option value="1">1st</option>
			<option value="2">2nd</option>
			<option value="3">3rd</option>
			<option value="4">4th</option>
			<option value="5">5th</option>
			<option value="6">6th</option>
			<option value="7">7th</option>
            <option value="8">8th</option>	
        </select> </td></tr>
</table>
<br>
<br>
<input type="submit">
</form>
<?php
$d=$_GET["dept"];
$c=$_GET["course"];
$s=$_GET["sem"];
$sn=$_GET["sch_no"];
$n=$_GET["name"];
$e=$_GET["email"];
$p=$_GET["pw"];
$rs=mysqli_query($con, "Insert into stdreg values(null,'$sn','$n', '$e', '$p', '$d', '$c','$s', 0)");
if( mysqli_affected_rows($con)>0)
echo "Registration Successful";
else
echo "error".mysqli_error($con);
?>
</body>
</html>