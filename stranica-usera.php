//Добавить роли к пользователю и добавить страницу, с произвольным содержимым, которое будет доступно только пользователю с определенной ролью.
//Тут текст могут видеть пользователи с ролью - user, доп. задание 1
<?php

session_start();

    if (isset ($_SESSION['login']) && $_SESSION['login'] =='user') {
        echo "Текст доступный пользователю с ролью - ПОЛЬЗОВАТЕЛЬ";

    } else {
        echo "Не выполнен вход или ваша роль не ПОЛЬЗОВАТЕЛЬ";
    }
echo "<br>";
echo "<a href='index.php'>На главную</a>";