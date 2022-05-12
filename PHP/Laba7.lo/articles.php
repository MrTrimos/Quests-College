<?PHP

	$page = $_GET['page'];
	$globalIndexArticles = $page; // global index articles

	$i = 0;
	$title = [];

	$articles = mysqli_connect("localhost", "root", "", "articlessql");

	if (!$articles) {
  		die("Ошибка: " . mysqli_connect_error());
	}

	$articlesTable = "SELECT * FROM articles";

	if($result = mysqli_query($articles, $articlesTable)){

		foreach($result as $row){
        	$title[$i] = $row["title"];
        	$i++;
    	}




    	mysqli_free_result($result); // очистка памяти
	} else{
    echo "Ошибка: " . mysqli_error($articles);}	
    mysqli_close($articles); // закрітие БД


    echo $title[$globalIndexArticles];
?>