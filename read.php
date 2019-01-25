<?php
require_once "db.php";
$db = DataBaseManager::getInstance();

if (!isset($_COOKIE['logged'])) {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/login.php');
}

if (isset($_GET['id']) && isset($_COOKIE['logged'])) {
    $sql = $db->query("SELECT * FROM students WHERE id = " . $_GET['id']);
    $item = $sql->fetch();
    require_once "templates/view.php";
} elseif(isset($_GET['id']) && !isset($_COOKIE['logged'])) {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/login.php');
} else {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/');
}