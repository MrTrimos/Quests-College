<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style type="text/css">
		#pad{
			padding: 20px 0px 0px 20px;
			display: flex;
			align-items: center;
			/*justify-content: center;*/
		}

		input{
			width: 100px;
			height: 20px;
		}

		#button{
			margin: 10px;
		}

		#h2_padin{
			margin: 20px;
		}

		#h3_padin{
			margin: 20px;
			display: flex;
			align-items: center;
		}

		.ansve{
			padding: 0px 0px 20px 20px;
		}

		p{
			padding: 0;
			margin: 0;
			font-size: 20px;
		}

	</style>

</head>
<body>
	<h2>TASK 1 - Array</h2>
	<div class = "ansve"><?php include "task1.php";?></div>

	<h2>TASK 2 - Array</h2>
	<div class = "ansve"><?php include "task2.php";?></div>


	<h2>TASK 3 - Array</h2>
	<form method="POST" id = "pad">
		<h3 id = "h3_padin">lastName:<input type="text" name="lastName"></h3>
		<h3 id = "h3_padin">firstName:<input type="text" name="firstName"></h3>
		<h3 id = "h3_padin">Age:<input type="text" name="age"></h3>
		<h3 id = "h3_padin">e-mail:<input type="text" name="eMail"></h3>
		<input type="submit" id = "button">
	</form>
	<div class = "ansve"><?php include "task3.php";?></div>

	<h2>TASK 4- Array</h2>
	<div class = "ansve"><?php include "task4.php";?></div>

</body>
</html>