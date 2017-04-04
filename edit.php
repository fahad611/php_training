<?php
$host='localhost';
$user='root'; 
$pass='';
$db='school';

$con=new mysqli($host,$user,$pass,$db);

if (!$con) {
	die("connnection failed:" .mysqli_connect_error());
}
 $edit_record = $_GET['edit'];

$query = "SELECT * FROM students where id='$edit_record'";

$run = mysqli_query($con,$query);

while($row=mysqli_fetch_array($run)){
		$edit_id = $row['id'];
		$name = $row['name'];
		$f_name = $row['father_name'];
		$school_name = $row['school_name'];
		$result = $row['result'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Data</title>
</head>
<body>
<form action="edit.php?edit_id=<?php echo $edit_id; ?>" method="post">
<table width="500px" border="5" align="center">
<tr>
	<td colspan="5" bgcolor="yellow" align="center"><h1>Updating Record</h1></td>
</tr>
<tr>
	<td align="right">Student Name:</td>
	<td><input type="text" name="name" required="true" value="<?php echo $name;?>"></td>
</tr>
<tr>
	<td align="right">Father Name:</td>
	<td><input type="text" name="father" required="true" value="<?php echo $f_name; ?>"></td>
</tr>
<tr>
	<td align="right">School Name:</td>
	<td><input type="text" name="school" required="true" value="<?php echo $school_name; ?>"></td>
</tr>
<tr>
	<td align="right">Result:</td>
	<td><input type="text" name="result" required="true" value="<?php echo $result; ?>"></td>
</tr>
<tr>
	<td colspan="5" align="center"><input type="submit" name="update" value="Update Now"></td>
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

$con=new mysqli($host,$user,$pass,$db);

if (!$con) {
	die("connnection failed:" .mysqli_connect_error());
}

	if (isset($_POST['update'])) {

		$edit_id = $_GET['edit_id'];
		$name = $_POST['name'];
		$f_name = $_POST['father'];
		$s_name = $_POST['school'];
		$result = $_POST['result'];

		$query = "update students set  name='$name',father_name='$f_name',school_name='$s_name',result='$result' where id ='$edit_id'";

		if(mysqli_query($con,$query)){
			echo "<script>window.open('select.php?updated= Data has been updated........!','_self')</script>";
		}

		

	}














?>