<?php
require_once "db.php";
$db = DataBaseManager::getInstance();

if (isset($_COOKIE['logged'])) {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/');
}

if (isset($_POST['login']) && isset($_POST['password'])) {
    $sql = $db->query("SELECT * FROM users WHERE login = '" . $_POST['login'] . "'");
    $user = $sql->fetch();
    if (!empty($user) && $user['password'] == $_POST['password']) {
        setcookie('logged', password_hash($user['password'], PASSWORD_DEFAULT));
        header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/');
    } else {
        $errors = "<script>alert('Неверный логин или пароль!')</script>";
        require_once "templates/login_view.php";
    }
} else {
    require_once "templates/login_view.php";
}