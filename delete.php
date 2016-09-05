
		<?php
			$port ="localhost:".getenv("S2G_MYSQL_PORT");

			$usr='root';
		
			$pwd='';
			
			$conn = mysql_connect($port,$usr,$pwd) or die("Connection Failed!");
	
			$db= mysql_select_db('library') or die("oh my god");

			$query = "select num from library";

			$result = mysql_query($query,$conn) or die('NO details in the table');

			if(!(mysql_fetch_array($result,MYSQL_ASSOC))){
				die("No Details In The Table");
			}


		else{

			$result = mysql_query($query,$conn) or die('NO details in the table');

		?>
<html>
<body>
	
	Select the book number To DELETE:

	<form  action = 'delete2.php' method = 'POST'>

		<select name='op' >
	
		<?php
			while($row = mysql_fetch_array($result , MYSQL_ASSOC)){  
		?>

			<option><?php  echo $row['num']; ?></option>
	
		<?php } ?>


	
			<option>ALL</option>

	
		</select>


	<input type= submit value= submit></input>
	</form>
	</body>
</html>
<?php  } ?>
