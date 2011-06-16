<?php
	$content = file_get_contents("http://www.tufts.edu");
	echo htmlentities($content);
?>
