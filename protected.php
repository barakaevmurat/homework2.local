<?php
session_start();

if (isset ($_SESSION['login'])) {
    echo "Этот текст доступен только авторизованным пользователям";

} else {
    echo "Не выполнен вход!";
}
echo "<br>";
echo "<a href='index.php'>На главную</a>";