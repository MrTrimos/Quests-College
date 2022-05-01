<?PHP

	if($_POST['nambeTable'] != null && is_int(+$_POST['nambeTable'])){

		$nambe = $_POST['nambeTable'];

		for($i = 1; $i <= 10 ; $i++){
			$resh = $nambe * $i;
			echo "<p>$nambe * $i = $resh</p>";
		}
	}

?>