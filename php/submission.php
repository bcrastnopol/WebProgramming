<!DOCTYPE html>

<html>

<head>
<title>Vote Processing</title>
</head>

<body>
<?php
	// This PHP program will grab data submitted from vote.html
	$name = $_POST['fullname'];
	$password = $_POST['passwd'];
	$gender = $_POST['gender'];
	$beverage = $_POST['beverage'];
	
	echo "<h1>Thank you for voting $name! I see your password is $password</h1>\n";
	if ($gender == "m") {
		echo "<h2>Your are a male</h2>\n";
	}
	elseif ($gender == "f") {
		echo "<h2>Your are a female</h2>\n";
	}
	elseif ($gender == "w") {
		echo "<h2>Your are a wookie</h2>\n";
	}
	else {
		echo "<h2>Your are an alien</h2>\n";
	}
	echo "<h2>Your favorite beverage is $beverage</h2>\n"
?>
</body>
</html>
