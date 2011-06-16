<?php
	$names = array("Alex", "Chris", "Brinker", "Mito", "Fred", "Marlee", "Avi", "Matt");
	$item = "Angry Bird Plush Toy";
	
	// Array stuff
	echo "<p>The length of the list names is " . sizeof($names) . " .</p>\n";
	array_unshift($names, "Ben");
	array_push($names, "Evelyn");
	shuffle($names);
	print_r($names);
	
	// String stuff
	echo "<p>The length of the string " . strtoupper($item) . " is " . strlen($item) . " characters.</p>\n";
	$words = explode("r", $item);
	print_r($words);
	
	// Hash stuff
	$array = array('The Rock' => 'theRock@knowyourrole.com',
			'William Bonney' => 'billythekid@yahoo.com',
			'Homer Simpson' => 'hoj@fox.com');
	foreach ($array as $key => $value) {
		print "<p>The e-mail address for $key is <a href=\"mailto:$value\">$value</a></p>\n";
	}
	
	// URL encoding
	$queryStr = urlencode('CIA hacked');
	$url = "http://search.twitter.com/search.json?q=$queryStr";
	echo "The encoded and accepted URL => " . $url . "\n";
?>
