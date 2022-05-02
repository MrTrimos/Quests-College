<?PHP

	$array = [

		"Ukrain" => "2 milion, Kharki",
		"Palau" => "3 milion, Melekeok",
		"Norway" => "1.5 milion, Oslo",
	];
	

	echo "<h3> Table 3x2 </h3>";
	echo "<table>";
		foreach ($array as $key => $value) {
			echo "<tr>";
			echo "<td style = 'border-right: 2px solid black;'><p>$key</p></td>";
			echo "<td style = 'border-right: 2px solid black;'><p>$value</p></td>";
			echo "</tr>";
		}
	echo "</table>";

	echo "<h3> Table 2x3 </h3>";
	echo "<table>";
		echo "<tr>";
		foreach ($array as $key => $value) {
			echo "<td style = 'border-right: 2px solid black;'><p>$key</p></td>";
		}
		echo "</tr>";	
		echo "<tr>";
		foreach ($array as $value) {
			echo "<td style = 'border-right: 2px solid black;'><p>$value</p></td>";
		}
		echo "</tr>";

	echo "</table>";


?>