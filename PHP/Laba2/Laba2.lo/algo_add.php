<?PHP

	if($_POST['number_one'] != null && $_POST['number_two'] != null){

		$num1 = $_POST['number_one'];
		$num2 = $_POST['number_two'];


		echo "<br>";
		echo "$num1 + $num2 = ", $num1 + $num2;
		echo "<br>";
		echo "$num1 - $num2 = ", $num1 - $num2;
		echo "<br>";
		echo "$num1 / $num2 = ", $num1 / $num2;
		echo "<br>";
		echo "$num1 * $num2 = ", $num1 * $num2;
		echo "<br>";
		echo "$num1 % $num2 = ", $num1 % $num2;
	}
?>