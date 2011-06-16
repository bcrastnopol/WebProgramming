<?php
	// Simple
	$str = "I can see Russia from my house!";
	if (preg_match("/I\scan/", $str)) {
		echo "<p>Needle was found</p>";
	}
	else {
		echo "<p>Needle was NOT found</p>";
	}
	
	// Simple
	$telephone = "617-867-5309";
	if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $telephone)) {
		echo "<p>Legitimate telephone number</p>\n";
	}
	else {
		echo "<p>Bad telephone number!</p>\n";
	}
	
	// MOAR!
	$str = 'We want more!  We want mOrE!  WE WANT MORE!';
	$str = preg_replace("/more/i", "moar", $str);
	echo $str;
?>