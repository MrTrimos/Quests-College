<?PHP

	if($_POST['nambeVenom1'] != null && $_POST['nambeVenom2'] != null 
		&& is_int(+$_POST['nambeVenom1']) && is_int(+$_POST['nambeVenom2'])){

		$nambeVenom1 = $_POST['nambeVenom1'];
		$nambeVenom2 = $_POST['nambeVenom2'];

		$min = 0;
		$max = 0;

		$time = 0;

		if($nambeVenom1 > $nambeVenom2){
			$min = $nambeVenom2;
			$max = $nambeVenom1;
		}else{
			$min = $nambeVenom1;
			$max = $nambeVenom2;
		}

		
		do{
			$time += 1;
			$i += 1;
			echo "<p>$i. прошло $time год. - имеем $min бактерий;</p>";
			$min += $min;
		}while ($min < $max);

	}

?>