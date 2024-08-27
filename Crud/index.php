<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>CRUD ТАБЛИЦА</title>
</head>
<body>
<?php 
require_once 'logic.php'; 
	foreach($info as $item) { //выводим комментарий
		?>
			<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title"><?= $item[1] ?></h5>
				<p class="card-text"><?= $item[2] ?></p>
			</div>
			</div>
<?php
}
?>
<!-- форма для отправки пользователем комментария -->
<h2>Добавить новый комментарий</h2> 
<form action="create.php" method="post"> 
	<p>Имя</p>
	<input type="text" name="name">
	<p>Напиши свой комментарий</p>
	<textarea name="description"></textarea>
	<button type="submit">Добавить</button>
</form>
<a href="index.php">Обновить</a>

</body>
</html>

