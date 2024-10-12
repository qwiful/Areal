<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sotrudniki');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}
?>