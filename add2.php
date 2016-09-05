<?php

	$num = $_POST["number"];

	$name = $_POST["bookname"];

	$port ="localhost:".getenv("S2G_MYSQL_PORT");

	$usr='root';

	$pwd='';

	if(empty(trim($num)) || empty(trim($name)) )
		die("Please Enter A valid Input!");
	//echo $post;	

	else{
		
	$conn = mysql_connect($port,$usr,$pwd) or die("Connection Failed!");
	
	$db= mysql_select_db('library') or die("oh my god");

	$sql = "INSERT INTO library (num,name) values('$num','$name')";

	$result = mysql_query($sql,$conn);

	if($result != 1){
		echo "Insertion Failed Please check the book number it may already exist!";
	}
	else
		echo "Insertion Successful!";
		?>
	

	<html>	
	<body>
	<br>	<a href="home.php"><button>Back to Home</button></a>
	</body>
	</html>

	<?php 
	
	}
?>
