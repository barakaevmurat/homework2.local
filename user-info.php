//страница с информацией о текущем пользователе, задание 2
<?php
session_start();

     if (isset ($_SESSION['login'])) {
        echo "Логин:" . $_SESSION['login'] . "\r \n";

        echo "Имя пользователя:" . $_SESSION['name'] . "\r \n";

        echo "Фамилия пользователя: " . $_SESSION['surname'];

    } else {
         echo "Не выполнен вход!";
            }
echo "<br>";
echo "<a href='index.php'>На главную</a>";