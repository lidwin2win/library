<?php

	$num = $_POST["number"];

	$name = $_POST["bookname"];

	if( empty(trim($name) ))
		die("Please Enter Valid Input"); 

	else{

	$port ="localhost:".getenv("S2G_MYSQL_PORT");

	$usr='root';

	$pwd='';
		
	$conn = mysql_connect($port,$usr,$pwd) or die("Connection Failed!");
	
	$db= mysql_select_db('library') or die("oh my god");

	$sql = "UPDATE library SET name= '$name' Where num = $num";

	$result = mysql_query($sql,$conn);

	if($result != 1)
		echo "Updation Failed";
	else
		echo "Updation Successful!";
	
	?>
	

	<html>	
	<body>
	<br>	<a href="home.php"><button>Back to Home</button></a>
	</body>
	</html>

	<?php } ?>
