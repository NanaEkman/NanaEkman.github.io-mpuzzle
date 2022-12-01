<?php
	$servername = "localhost";
	$database = "id19669247_bdmpuzzle";
	$username = "id19669247_usermpuzzle";
	$password = "Batata@12345";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
		die("A conexão falhou!!!". mysqli_connect_error());
	}

?>