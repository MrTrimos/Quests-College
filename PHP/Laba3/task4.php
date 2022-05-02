<?PHP
	

	$arrayOne = [];
	$arrayTwo = [];

	echo "<h3>arrayOne</h3>";
	for($i = 10; $i <= 20; $i++){
		$arrayOne[$i] = pow($i, 2);
		echo "<p>$i^2 = $arrayOne[$i];</p>";
	}

	echo "<h3>arrayTwo</h3>";
	for($i = 1; $i <= 10; $i++){
		$arrayTwo[$i] = pow($i, 3);
		echo "<p>$i^3 = $arrayTwo[$i]</p>";
	}

	$arrayAdd = array_merge($arrayOne, $arrayTwo);

	echo "<h3>arrayAdd</h3>";
	for($i = 0; $i <= 20; $i++){
		echo "<p>$arrayAdd[$i]</p>";
	}

?>