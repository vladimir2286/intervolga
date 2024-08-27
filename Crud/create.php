<?php
require_once 'config/connect.php';

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8'); // Получение данных от пользователя

// sql запрос с подготовленными выражениями
$stmt = mysqli_prepare($connect, "INSERT INTO `forma` (`name`, `description`) VALUES (?, ?)");

if ($stmt === false) {
    die('Ошибка подготовки запроса: ' . mysqli_error($connect));
}

// Привязка параметров к подготовленному запросу
mysqli_stmt_bind_param($stmt, 'ss', $name, $description); // 'ss' означает два строковых параметра

// Выполнение запроса
if (mysqli_stmt_execute($stmt)) {
    echo "Данные успешно добавлены.";

} else {
    die('Ошибка выполнения запроса: ' . mysqli_error($connect));
}

mysqli_stmt_close($stmt);

// обрываем соединение с базой данных
mysqli_close($connect);

header("Location: /index.php");
?>
