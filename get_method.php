 <!DOCTYPE html>
 	<head>
  	<title>php get and post</title>
 	</head>
 <body>
	<form align="center" action="get_post.php" method="get">
	
	username: <input type="text" name="name"></input><br><br>
	Userrmail: <input type="text" name="email"></input><br>
	<input type="submit" name="submit" value="Sign up">
	
	</form>
 </body>
 </html>
 
 <?php
	if(isset($_GET['submit'])) {
 	echo $name = $_GET['name'];
 	echo $email = $_GET ['email'];
		}
?>