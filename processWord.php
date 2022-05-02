<?php
	include_once 'index.html';
	require_once 'functions.php';

	$letters = $_POST['letters'];
	
	// Compiles the letters into a word with the wildcards
	$word = '';
	$wildcards = 0;
	foreach($letters as $letter) {
		if($letter == '') {
			$word .= '_';
			++$wildcards;
		} else {
			$word .= $letter;
		}
	}
	if($wildcards != 5) { // so long as not every letter was a wildcard (no actual letters to not display all)
		$query = "SELECT * FROM words WHERE word LIKE '$word'";
	
		$result = queryMysql($query); // queries the regex expression to get the matches
		$num = $result -> num_rows;
		
		echo "<h1>Matches:</h1>";

		if($num == 0) { // no rows condition (no matches)
			echo "<h2>There were no matches</h2>";
		}

		// Creates a UL to compile all of the matches into (formatting in styles.css)
		echo "<ul>";

		for($j = 0; $j < $num; ++$j) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			echo "<li>" . $row['word'] . "</li>";
		}
		echo "</ul>";
	} else {
		echo "<h2>Invalid Input</h2>"; // if all were wildcards, informs user
	}
?>