<?
	$link=mysqli_connect("localhost", "root", "1997", "mysite");

	if(isset($_POST['submit'])) {
		$text1 = $_POST['aims'];
		$text2 = $_POST['future'];
		$status = $_POST['status'];
		$satisfy = isset($_POST['box']) ? 1 : 0;

		mysqli_query($link, "INSERT INTO quiz SET aims='".$text1."', future='".$text2."', status='".$status."', satisfied='".$satisfy."'");
	}