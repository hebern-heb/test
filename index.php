<html>
<head>
	<title>URL Shortner</title>
</head/>
<body>
	<form method="post">		
			<label>Enter URL : </label>
			<input type="text" name="url" required="required" autocomplete="off"><br><br>
			<button type="submit" value="submit">SUMBIT</button>
	</form> 
</body>
</html>

<?php

if(isset($_POST['url'])){

	$url 	= file_get_contents("url.json");
	$url 	= json_decode($url,true);

	$rand 	= substr(sha1(microtime()),0,9);

	if(!isset($url[$rand]))
	{
		$url[$rand]	=	$_POST['url'];

	}

	file_put_contents('url.json',json_encode($url));


	echo "Your Shortened URL is : localhost/test/url.php?url={$rand}";
}

?>