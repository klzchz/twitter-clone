<?php
	
	session_start();

	if ($_SESSION['usuario'] == '') {
		header('Location: index.php?erro=1');

	}
	require_once('db.php');

    $texto_tweet = $_POST['texto_tweet'];
    $id_usuario = $_SESSION['id_usuario'];
    // echo $texto_tweet;

    if (isset($_SESSION['id_usuario'])) {
    	if (isset($texto_tweet)) {
		    		
			$objDb = new db();
			$link=$objDb->conecta_mysql();

			$sql =  "INSERT INTO tweet(id_usuario, tweet) values($id_usuario,'$texto_tweet')";

			mysqli_query($link,$sql);

    	}
    }
	


?>