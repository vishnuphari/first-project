<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$text = "Word wrap will split this text up into smaller lines, which makes for easier reading and neater layout.";
	$newtext=wordwrap($text,20,"<br/>\n");
	echo $newtext;
	?>

</body>
</html>