<?PHP
	if($_POST['nambe'] != null && is_int(+$_POST['nambe'])){
		$nambe = $_POST['nambe'];

		if(!($nambe % 2)){echo "<p>Double $nambe number</p>";}
		else{echo "<p>The number $nambe is not paired</p>";}
	}
	else{echo "<p>The number is not an integer</p>";}
?>