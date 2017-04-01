<!DOCTYPE html>
<html>
<head>
	<title>PHP get and post</title>
</head>
<body>
		<form align="center" action="get & post methods.php" method="post">
		USER NAME:<input type="text" name="name"><br>
		USER EMAIL:<input type="text" name="email"><br>
		<input type="submit" name="submit" value="sign up">
			</form>

</body>
</html>
<?php


			if (isset($_POST['submit'])) {

			echo $name = $_POST['name'];
			echo $email = $_POST['email'];

}


?>