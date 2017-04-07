<!DOCTYPE html>
	<head>
		<title>Select</title>
	</head>
<body>
	<table width="800px" border="5" align="center">
	<tr>
		<th>Seriel No:</th>
		<th>Student Name:</th>
		<th>Father Name:</th>
		<th>School Name</th>
		<th>Roll Number</th>
		<th>Result</th>
	</tr>

	<h1 align="center"><?php
echo @$_Get['deleted']; ?> </h1>
	<h1 align="center"><?php
echo @$_Get['updated']; ?> </h1>

<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'school';
$con = new mysqli($host, $user, $pass, $db);

if (!$con)
{
	die("connection failed:" . mysqli_connect_error());
}

$query = "SELECT * FROM students";
$run = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($run))
{
	$id = $row['id'];
	$name = $row['name'];
	$f_name = $row['father_name'];
	$school_name = $row['school_name'];
	$roll_number = $row['roll_number'];
	$result = $row['result'];
?>
<tr>
	<td><?php
	echo $id; ?></td>
	<td><?php
	echo $name; ?></td>
	<td><?php
	echo $f_name; ?></td>
	<td><?php
	echo $school_name; ?></td>
	<td><?php
	echo $roll_number; ?></td>
	<td><?php
	echo $result; ?></td>
	<td><a href="delete.php?del=<?php
	echo $id; ?>">Delete</td>
	<td><a href="edit.php?edit=<?php
	echo $id; ?>">Edit</td>
	<?php
} ?>
</tr>	
	</table>

</body>
</html>