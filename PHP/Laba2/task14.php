<?PHP
	
	$nambeMath = $_POST['nambeMath'];

	function multTableNambe($nambe){

		for($i = 1; $i <= 10 ; $i++){
			$resh = $nambe * $i;
			echo "<p>$nambe * $i = $resh</p>";
		}
	}

	function multTable(){
		echo "<table >";
			for($i = 1; $i <= 10 ; $i++){
				echo "<tr>";
				for($j = 2; $j <= 9 ; $j++){
					$resh = $i * $j;
					echo "<td style = 'border-right: 2px solid black;'><p>$j * $i = $resh</p></td>";
				}
				echo "</tr>";
			}
		echo "</table>";
	}

	if($_POST['nambeMath'] != null && is_int(+$_POST['nambeMath'])){
		multTableNambe($nambeMath);
	}

	if($_POST['nambeMath'] == null){
		multTable();
	}

?>