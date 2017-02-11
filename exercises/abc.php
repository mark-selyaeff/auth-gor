<?php

	require 'app_config.php';

	$link = mysqli_connect(database_host, username, password)
		or die("<p>Error: " . mysqli_error() . "</p>");
	echo "<p> You are connected to the database host" . database_host. "</p>";

	mysqli_select_db($link, database_name)
		or die("<p>Ошибка при выборе базы данных " . mysqli_error() . "</p>");

	echo "<p> Вы подключены к БД" . database_name . "</p>";

	$result = mysqli_query($link, "SHOW TABLES;");
	if($result) {
		echo "ok";
	}
	else {
		echo "smth wrong";
	}
	echo "<p>Таблицы, имеющиеся в базе данных: </p>";
	echo "<ul>";
	while ($row = mysqli_fetch_row($result)) {
		echo "<li>Таблица: $row[0]</li>";
	}
	echo "</ul>";

	// if (!$result) {
	// 	die("<p>Ошибка при выводе перечня таблиц: " . mysqli_error() . "</p>");
	// }
?>
