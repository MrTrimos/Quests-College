<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="progect">
		<div class="bodyArticles">
			<div class="articles">
				<div class="title">
					<h1 class="titleText"><?php include "articles.php";?></h1>
				</div>
				<div class="articlesText">
					<p><?php include "articlesText.php";?></p>
				</div>
			</div>
		</div>

		<h1 class="h1Coment">Коментарии к сатье</h1>
		<div class="bodyComments">
			<div class="comments">
				<div class="photoUsers">
					
				</div>
				<!-- Comments -->
				<?php include "nameAndDate.php";?>  
			</div>

			<form action="create.php" method="post"  class="commentField">
    			<input type="text" name="username" id ="comments"></p>
    			<input type="submit" value="Добавить" id ="commentsBtn">
			</form>
		</div>

		
	</div>

	<div class="articlePreviousNext">
		<a href="/?page=0"><div id="btnPage">1</div></a>
		<a href="/?page=1"><div id="btnPage">2</div></a>
		<a href="/?page=2"><div id="btnPage">3</div></a>
		<a href="/?page=3"><div id="btnPage">4</div></a>
	</div>

</body>
</html>