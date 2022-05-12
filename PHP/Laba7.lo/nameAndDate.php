<?PHP

	$page = $_GET['page'];

	$indexArticles = 0; // переключение между коментариями
	$globalIndexArticles = $page; // global index articles


	$i = 0;
	$j = 0;

	$name = [];
	$usersID = 0;


	$comments = mysqli_connect("localhost", "root", "", "articlessql");	

	if (!($comments)) {
  		die("Ошибка: " . mysqli_connect_error());
	}


	$commentsTable = "SELECT * FROM comments";
	$usetTable = "SELECT * FROM `users`";

	if($result = mysqli_query($comments, $commentsTable)){

		foreach($result as $row){
			if($row["article_id"] ==  $globalIndexArticles + 1){
        		$user_id[$i] = $row["user_id"];
        		$data[$i] = $row["date"];
        		$i++;

        		
        		if($resultUser = mysqli_query($comments, $usetTable)){
					foreach($resultUser as $row){
						if($user_id[$j] == $row["id"]){
							$name[$j] = $row["name"];
							$note[$j] = $row["note"];
        					$j++;
        				}
        			}
				}

    		}
		}


    	mysqli_free_result($result); // очистка памяти
    	mysqli_free_result($resultUser); // очистка памяти
	} else{
    echo "Ошибка: " . mysqli_error($comments);}	
    mysqli_close($comments); // закрітие БД


    for($k = 0; $k < count($name); $k++) {

    	echo "<div class='commentsText'><p>$note[$k]</p></div>
			<div class='dataPost'><p>$name[$k], $data[$k]</p></div>";
	}

?>