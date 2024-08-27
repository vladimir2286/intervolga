<?php
require_once ('config/connect.php');
$info = mysqli_query($connect, "SELECT * FROM forma");
$info = mysqli_fetch_all($info);
?>
