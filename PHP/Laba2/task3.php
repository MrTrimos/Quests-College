<?PHP

	if($_POST['login'] != null && $_POST['passvord'] != null){

		$login = $_POST['login'];
		$pass = $_POST['passvord'];

		$baseLogin = [
			(object) array(name => 'Anton',passvord => 1111),
			(object) array(name => 'Igor',passvord => 2222),
			(object) array(name => 'Trimos',passvord => 3333),
			(object) array(name => 'I',passvord => 4444),
		];

		for($i = 0; $i < 4 ; $i++){
			if($login == $baseLogin[$i]->name && $pass== $baseLogin[$i]->passvord){
				echo "<p> Нello $login, you successfully logged </p>";
				break;
			}
			// else{echo "<p> Please go through the registration $login </p>";}
		}
	}
// count($baseLogin)
?>