 <!DOCTYPE html>
 	<head>
  	<title>php get and post</title>
 	</head>
 <body>
	<form align="center" action="get_post.php" method="post">
	
	username: <input type="text" name="name"></input><br><br>
	Userrmail: <input type="text" name="email"></input><br>
	<input type="submit" name="submit" value="Sign up">
	
	</form>
 </body>
 </html>
 
 <?php
	if(isset($_POST['submit'])) {
 	echo $name = $_POST['name'];
 	echo $email = $_POST['email'];
		}
?>