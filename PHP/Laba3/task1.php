<?PHP

	$arr = array(1,5,6,7,9);
	foreach ($arr as &$value) {
    	$resh = pow($value, 2);
    	echo "<p>$value^2 = $resh;</p>";
	}

?>