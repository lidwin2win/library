<?php
	
	$option = $_POST['op'];
//	echo $op;


	
	$port ="localhost:".getenv("S2G_MYSQL_PORT");

	$usr='root';

	$pwd='';
		
	$conn = mysql_connect($port,$usr,$pwd) or die("Failed!");
	
	$db= mysql_select_db('library') or die("oh my god");



	if($option=="ALL"){

	$sql = "Select * from `library`";
	$result = mysql_query($sql,$conn) or die("Connection failed");
?>
	<html>	
	<body>

		<table border=5>
		<tr>
			<td> Number</td>
			<td> Name</td>
		</tr>

	<?php while($row = mysql_fetch_array($result,MYSQL_ASSOC)){ ?>

		<tr>
			<td><?php echo $row['num']; ?> </td>
			<td><?php echo $row['name']; ?> </td>
		</tr>
	<?php }
	?>


		</table>

<?php 
}

	else{


	$sql = "Select * from `library` where num='$option'";

	$result = mysql_query($sql,$conn) or die("Connection failed");
	

	$row = mysql_fetch_array($result,MYSQL_ASSOC);

?>
	<html>	
	<body>

		<table border=5>
		<tr>
			<td> Number</td>
			<td> Name</td>
		</tr>
		<tr>
			<td><?php echo $row['num']; ?> </td>
			<td><?php echo $row['name']; ?> </td>
		</tr>
		</table>

<?php } ?>

	<br>	<br>
	<a href="home.php"><button>Back to Home</button></a>
	</body>
	</html>

