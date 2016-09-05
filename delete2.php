<?php
	
	$option = $_POST['op'];
//	echo $op;


	
	$port ="localhost:".getenv("S2G_MYSQL_PORT");

	$usr='root';

	$pwd='';
		
	$conn = mysql_connect($port,$usr,$pwd) or die("Failed!");
	
	$db= mysql_select_db('library') or die("oh my god");



	if($option=="ALL"){

	$sql = "Delete  from library";
	$result = mysql_query($sql,$conn) or die("Connection failed");
	if($result==1)
		echo "all details have been deleted succesfully!";
	else
		echo "deletion failed";
	}

	else{
		$sql = "Delete from library where num = $option";
	$result = mysql_query($sql,$conn) or die("Connection failed");
	if($result==1)
		echo "details have been deleted succesfully!";
	else
		echo "deletion failed";

	}

?>


	<html>	
	<body>
	<br>	<a href="home.php"><button>Back to Home</button></a>
	</body>
	</html>

