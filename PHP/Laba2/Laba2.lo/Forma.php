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
		}

		.ansve{
			padding: 0px 0px 20px 20px;
		}

		p{
			padding: 0;
			margin: 0;
		}

	</style>
</head>
<body>


	<h2>TASK 1 - Сalculator</h2>
	<form method="POST" id = "pad">
		<input type="text" name="number_one">
		<h2 id = "h2_padin">?</h2>
		<input type="text" name="number_two">
		<input type="submit" id = "button">
	</form>
	<div class = "ansve"><?php include "algo_add.php";?></div>


	<h2>TASK 2 - Сomparison</h2>
	<form method="POST" id = "pad">
		<input type="text" name="number_one_task2">
		<h2 id = "h2_padin"> >?< </h2>
		<input type="text" name="number_two_task2">

		<input type="submit" id = "button">
	</form>
    <div class = "ansve"><?php include "task2.php";?></div>


    <h2>TASK 3 - 4 - User authorization</h2>
    <form method="POST" id = "pad">
    	<h3 id = "h3_padin">Login:</h3>
		<input type="text" name="login">
		<h3 id = "h3_padin">Passvord:</h3>
		<input type="text" name="passvord">
		<input type="submit" id = "button" value="Cout">
	</form>
    <div class = "ansve"><?php include "task3.php";?></div>


    <h2>TASK 5 - 6 - Check number for parity</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambe">
		<input type="submit" id = "button" value="Check number for parity">
	</form>
    <div class = "ansve"><?php include "task5.php";?></div>


    <h2>TASK 7 - 8 - Guess the number</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambeRand">
		<input type="submit" id = "button" value="Guess the number">
	</form>
    <div class = "ansve"><?php include "task7.php";?></div>


    <h2>TASK 9 - Multiplication table</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambeTable">
		<input type="submit" id = "button" value="Click on me">
	</form>
    <div class = "ansve"><?php include "task9.php";?></div>


    <h2>TASK 10 - 11 - Division range</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambe1">
		<input type="text" name="nambe2">
		<input type="submit" id = "button" value="Click on me">
	</form>
    <div class = "ansve"><?php include "task10.php";?></div>


    <h2>TASK 12 - Guess the number</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambeRands">
		<input type="submit" id = "button" value="Guess the number">
	</form>
    <!-- <div class = "ansve"><?php include "task12.php";?></div> -->
 <!--    <script type="text/javascript" src="task12_JS.js"></script> -->



    <h2>TASK 13 - Venom</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambeVenom1">
		<input type="text" name="nambeVenom2">
		<input type="submit" id = "button" value="Click on me">
	</form>
    <div class = "ansve"><?php include "task13.php";?></div>


    <h2>TASK 14 - Math</h2>
    <form method="POST" id = "pad">
		<input type="text" name="nambeMath">
		<input type="submit" id = "button" value="Click on me">
	</form>
    <div class = "ansve"><?php include "task14.php";?></div>

</body>
</html>