<?PHP
	
	if($_POST['number_one_task2'] != null && $_POST['number_two_task2'] != null){


		$num1 = $_POST['number_one_task2'];
		$num2 = $_POST['number_two_task2'];

		if($num1 > $num2){echo "<p> $num1 </p>";;}
		if($num1 < $num2){echo "<p> $num2 </p>";;}
		if($num1 == $num2){echo "<p> $num1 == $num2 </p>";}

	}
?>