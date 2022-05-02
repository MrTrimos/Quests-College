<?PHP
	
	if($_POST['lastName'] != null && $_POST['firstName'] != null 
		&& $_POST['age'] != null && $_POST['eMail'] != null){

		$lastName = $_POST['lastName'];
		$firstName = $_POST['firstName'];
		$age = $_POST['age'];
		$eMail = $_POST['eMail'];

		$persone = [
			"lastName" => $lastName,
			"firstName" => $firstName,
			"age" => $age,
			"eMail" => $eMail,
		];


		echo "<table>";
		foreach ($persone as $key => $value) {
			echo "<tr>";
			echo "<td style = 'border-right: 2px solid black;'><p>$key</p></td>";
			echo "<td style = 'border-right: 2px solid black;'><p>$value</p></td>";
			echo "</tr>";
		}
		echo "</table>";
		
	}
?>