<!DOCTYPE html>

<html>

<head>
<title>PHP Hash Test</title>
</head>

<body>
<ul>
<?php
	$names = array("Larry" => "Bacow", "Bono" => "Hewson", "Clinton" => "Cheeseburger", "Jackson" => array ("Michael", "Janet", "LaToya"));
	foreach ($names as $k => $v) {
		print "<li>The key $k is related or mapped to $v</li>\n";
	}
?>
</ul>
</body>
</html>
