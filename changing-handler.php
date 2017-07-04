//страница с обработкой редактирования информации о пользователе
<?php
session_start();


        $_SESSION['name'] = $_POST['newname'];
        $_SESSION['surname'] = $_POST['newsurname'];

        echo "Данные сохранены! <br><a href='index.php'>На главную</a>";


