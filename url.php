<?php

	if(isset($_GET['url'])){

		$url 	= file_get_contents("url.json");
		$url	= json_decode($url,true);

		if(isset($url[$_GET['url']])){

			$url = "http://{$url[$_GET['url']]}";
			header("Location:{$url}");
		}else{
			header('Location:index.php');
		}

	}else{

		echo "Something went wrong";
	}

?>