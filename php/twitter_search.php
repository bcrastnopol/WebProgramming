<?php
	$search = "CIA hacked";
	$url = "http://search.twitter.com/search.json?q=" . urlencode($search);
	$json = file_get_contents($url);
	$parsed = json_decode($json);
	print_r($parsed);
?>
