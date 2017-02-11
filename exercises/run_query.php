<?php
	require 'database_connection.php';

	$query_text = $_REQUEST['query'];
	$query_text_upper = strtoupper($query_text);
	// echo $query_text;
	$result = mysqli_query($link, $query_text);

	if (!$result) {
		die("<p>Ошибка при выполнении запроса" . $query_text . ": " . mysqli_error() . "</p>");
	}

	$return_rows = false;
	$location = strpos($query_text_upper, 'CREATE');
	if ($location === false) {
		$return_rows = true;
	}

	if ($return_rows) {
	echo "<p>Результаты вашего запроса:</p>";
	echo "<ul>";

	while ($row = mysqli_fetch_row($result)) {
		echo "<li>{$row[0]}</li>";
	}
	echo "</ul>";
	} else {
		echo "Ваш запрос $query_text не возвращает строк";
	}
?>