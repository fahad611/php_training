<!DOCTYPE html>
	<head>
		<title>Select</title>
	</head>
<body>
	<form action="search.php" method="post">

	<div align="right">

	<input type="text" name="search" placeholder="Search by roll no or name" size="40px">
	<input type="submit" name="submit">
	</div>
	</form>

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

if (isset($_POST['submit']))
{
	$search = $_POST['search'];
	$query1 = "select * from students where roll_number='$search' or name='$search'";
	$run = mysqli_query($con, $query1);
?>
<table width="600px" align="center" border="0" bgcolor="orange">
<?php
	while ($row = mysqli_fetch_array($run))
	{
		$student_name = $row['name'];
		$f_name = $row['father_name'];
		$school_name = $row['school_name'];
		$rollnumber = $row['roll_number'];
		$result = $row['result'];
?>
<tr>
	<td><?php
		echo $student_name; ?>  </td>
	<td><?php
		echo $f_name; ?>  </td>
	<td><?php
		echo $school_name; ?>  </td>
	<td><?php
		echo $rollnumber; ?>  </td>
	<td><?php
		echo $result; ?>  </td>
</tr>
<tr>
	<td colspan="5" align="center"><a href="search.php">OK</a></td>
</tr>
<?php
	} ?>
	
</table>
<?php
} ?>
</form>


	<form action="select.php" method="post">
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
	</form>

</body>
</html>