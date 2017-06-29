<?php
session_start();

$credentials = array(
    'admin' => [
        'password'  =>'1234',
        'name'      =>'John',
        'surname'   =>'Brown'
    ]
);
if (isset($_POST['login']) && isset($_POST['password'])) {
    if (isset($credentials[$_POST['login']]) && $credentials[$_POST['login']]['password'] == $_POST['password']) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['name'] = $credentials[$_POST['login']]['name'];
        $_SESSION['surname'] = $credentials[$_POST['login']]['surname'];

        header('Location: index.php');
    } else {
        echo 'Invalid credentials';
    }
} else {
    header('Location: index.php');
}

