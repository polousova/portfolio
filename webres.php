<?php
	$mysqli = new mysqli('localhost', 'root', '', 'Web_res');

	if (mysqli_connect_errno()) {
		printf("соединение установлено", mysqli_connect_error());
		exit();
	}

	$query = "insert into links values(null, 'HTML', 'справочник', 'Справочник по HTML', 'https://htmlreference.io', Now())";
	$mysqli->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ресурсы веб-разработчика</title>
</head>
<body>
	<h3>Ресурсы веб-разработчика</h3>
	<form action="/" method="GET">
		<input type="text" name="category" placeholder="категория">
		<input type="text" name="name" placeholder="название">
		<input type="text" name="description" placeholder="описание">
		<input type="text" name="link" placeholder="ссылка на ресурс">
		<input type="button" value="Отправить">
	</form>
</body>
</html>