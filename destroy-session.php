//Разлогин с редиректом на главную страницу, задание 5
<?php
session_start();

session_destroy();

header('Location: index.php');