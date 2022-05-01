<?PHP

	if($_POST['nambeRand'] != null && is_int(+$_POST['nambeRand'])){

		$nambe = $_POST['nambeRand'];
		$array;

		$min = 0;
		$max = 9;

		$array = random_int($min, $max);

		if($nambe < $array){echo"<p> The number is greater </p>";}
		if($nambe > $array){echo"<p>Number less</p>";}

		if($nambe == $array){
			echo"<p style = 'color:red'> Yeees you very lucky! </p>";
		}
		else{echo"<p> Not - $array </p>" ;}

	}

?>