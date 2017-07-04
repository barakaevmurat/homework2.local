//Страница с редактированием информации текущего пользователя (в рамках текущей сессии, после разлогина данные сбрасываются), задание 4
<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php if (isset ($_SESSION['login'])) { ?>
<form method="POST" action="changing-handler.php">
    <label>Введите имя:</label>
    <input type="text" name="newname">

    <label>Введите фамилию:</label>
    <input type="text" name="newsurname">

    <button type="submit">Сохранить</button>
</form>
<?php } else {
 echo 'Не выполнен вход!'; }
echo "<br>";
echo "<a href='index.php'>На главную</a>"; ?>
</body>
</html>