<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'school';
$con = new mysqli($host, $user, $pass, $db);

if (!$con)
{
	die("connnection failed:" . mysqli_connect_error());
}

$delete_id = $_GET['del'];
$query = "DELETE FROM students where id='$delete_id'";

if (mysqli_query($con, $query))
{
	echo "<script>window.open('select.php?deleted = data has been deleted...','_self')</script>";
}
?>
