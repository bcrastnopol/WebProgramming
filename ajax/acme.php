<?php
	// Performs cross-domain request to grab JSON data
	$content = file_get_contents("http://tuftswebdev.appspot.com/acme");
	echo $content;
?>
