<?php
	
	$option = $_POST['op'];
//	echo $op;


	
	$port ="localhost:".getenv("S2G_MYSQL_PORT");

	$usr='root';

	$pwd='';
		
	$conn = mysql_connect($port,$usr,$pwd) or die("Failed!");
	
	$db= mysql_select_db('library') or die("oh my god");


	$sql = "Select * from `library` where num='$option'";

	$result = mysql_query($sql,$conn) or die("Connection failed");	

	$row = mysql_fetch_array($result,MYSQL_ASSOC);

?>

<html>
<body>
	<center>
	<form action = "update3.php" method = "post" >

		Name:<input type="text" name="bookname" value="<?php echo $row['name'];?>" required></input><br><br>		
	
		<input type='text' value="<?php echo $option; ?>"  name="number" hidden></input>

		<input type="submit" value="SUBMIT"></input>
	</form>
</body>
</html>


