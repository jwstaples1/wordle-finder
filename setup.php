<!DOCTYPE html>
<html>
	<head>
		<title>Setting up database</title>
	</head>
	<body>
		<h3>Setting up...</h3>
		
<?php
	require_once 'functions.php';
	
	echo "Creating table<br>";
	
	createTable('words',
				'word VARCHAR(5)');
	
	echo "Done<br>";

	/* Adds all of the words to the array, causes problems after initialization by adding a second value of each

	echo "Populating table<br>";

	$wordleList = fopen('words.txt', 'r') or die("Unable to access file.");
	
	while(true) {
		$line = fgets($wordleList);
		if($line === false) {
			break;
		}
		echo '$line<br>';
		$query = "INSERT INTO words VALUES ('$line')";
		queryMysql($query);
	}

	echo "Done<br>";
	*/
?>
	<br>... done.
	</body>
</html>