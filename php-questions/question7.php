<!DOCTYPE html>
<html>
<head>
	<title> Script to decode the html entities</title>
</head>
<body>
	<?php
	$str = '&lt;html&gt;&lt;body&gt;Hey!&lt;/body&gt;&lt;/html&gt';
    echo html_entity_decode($str);
	?>

</body>
</html>