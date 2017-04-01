<!DOCTYPE html>
<html>
<head>
	<title>Students Data</title>
</head>
<body>
<form action="school.php" method="post">
<table width="500px" border="5" align="center">
<tr>
	<td colspan="5" bgcolor="yellow" align="center"><h1>Student Registration</h1></td>
</tr>
<tr>
	<td align="right">Student Name:</td>
	<td><input type="text" name="name" required="true"></td>
</tr>
<tr>
	<td align="right">Father Name:</td>
	<td><input type="text" name="father" required="true"></td>
</tr>
<tr>
	<td align="right">School Name:</td>
	<td><input type="text" name="school" required="true"></td>
</tr>
<tr>
	<td align="right">Result:</td>
	<td><input type="text" name="result" required="true"></td>
</tr>
<tr>
	<td colspan="5" align="center"><input type="submit" name="submit" value="Submit Now"></td>
</tr>

	</table>
	
</form>



</body>
</html>

<?php
$host='localhost';
$user='root';
$pass='';
$db='school';

$con= new mysqli($host,$user,$pass,$db);

if(!$con){
	die("connection failed:" .mysqli_connect_error());
}


if(isset($_POST['submit'])) {
	
	 $name = $_POST['name'];
	 $fname = $_POST['father'];
	 $school = $_POST['school'];
	 $result = $_POST['result'];

	 $query = "insert into students(name,father_name,school_name,result) values('$name','$fname',
	 '$school','$result')";



	if(mysqli_query($con,$query)){
	echo "Data inserted";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
mysqli_close($con);
?>






