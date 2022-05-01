<?PHP

	if($_POST['nambe1'] != null && $_POST['nambe2'] != null 
		&& is_int(+$_POST['nambe1']) && is_int(+$_POST['nambe2'])){

		$nambe1 = $_POST['nambe1'];
		$nambe2 = $_POST['nambe2'];

		$min = 0;
		$max = 0;

		if($nambe1 > $nambe2){
			$min = $nambe2;
			$max = $nambe1;
		}else{
			$min = $nambe1;
			$max = $nambe2;
		}

		for($i = $min; $i <= $max ; $i++){
			if($i == 0){echo "Do not divide by 0"; continue;}
			$resh = 10 / $i;
			echo "<p>10 / $i = $resh</p>";

		}

	}

?>