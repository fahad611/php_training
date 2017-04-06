<?php

	//Global Variables

		$x = 75; 
		$y = 25;
 
	function addition() { 
    	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
	}
 
	addition(); 
		echo $z; 
       
    //PHP $_SERVER

	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];

	//PHP $_REQUEST

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  	Name: <input type="text" name="fname">
	<input type="submit">
	</form>

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	// collect value of input field
    	$name = $_REQUEST['fname'];
    	if (empty($name)) {
        echo "Name is empty";
    	} else {
        echo $name;
    		}
		}
	//PHP $_POST

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 Name: <input type="text" name="fname">
	 <input type="submit">
	
	</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    // collect value of input field
	    $name = $_POST['fname'];
	    if (empty($name)) {
		echo "Name is empty";
	    } else {
		echo $name;
	    	}
		}

		//PHP $_GET
<?php 
	echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
	
