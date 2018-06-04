<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$input="PHP is a widely-used open source general-purpose scripting language";
	$input=str_replace(" ","-",$input);
	echo $input;
	echo "<br> <br>";
	$input1="PHP is a widely-used open source general-purpose scripting language";
	$input1=str_ireplace(" ","<br>", $input1);
	echo $input1;
    ?>

</body>
</html>