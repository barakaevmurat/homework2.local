<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>Войдите</h1>
<p>Пользователь: <?php echo (isset($_SESSION['login']) ? $_SESSION['login'] : 'Не выполнен выход' ) ?></p>
<?php if (!isset($_SESSION['login'])) { ?>
<form method="POST" action="handler.php">
    <label>Логин:</label>
    <input type="text" name="login">

    <label>Пароль:</label>
    <input type="password" name="password">

    <button type="submit">Войти</button>
</form>
<?php } ?>
<a href="user-info.php">Информация о пользователе</a>
<a href="change-user-info.php">Редактировать данные пользователя</a>
<a href="protected.php">Для авторизованных пользователей</a>
<a href="destroy-session.php">Выйти</a>

</body>
</html>
