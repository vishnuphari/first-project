<!DOCTYPE html>
<html>
<body>
	<title>Factorial Program in PHP</title>
	<form action="" method="post">
		<input type="text" name="number" />
        <input type="submit" value="find the factorial" />
	</form>
</body>
</html>
 
<?php 
	if($_POST){
		$fact = 1;
		$number = $_POST['number'];
		echo "Factorial of $number:<br><br>";
		for ($i = 1; $i <= $number; $i++){			
			$fact = $fact * $i;
			print $fact . "<br>";
		}
	}
 
?>
</body>
</html>