<?php
	require 'app_config.php';

	$link = mysqli_connect(database_host, username, password)
		or die("<p>Error: " . mysqli_error() . "</p>");
	echo "<p> You are connected to the database host " . database_host. "</p>";

	mysqli_select_db($link, database_name)
		or die("<p>Ошибка при выборе базы данных " . mysqli_error() . "</p>");

	echo "<p> Вы подключены к БД " . database_name . "</p>";
 ?>