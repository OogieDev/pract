<?php
require_once "db.php";
$db = DataBaseManager::getInstance();


if (!isset($_COOKIE['logged'])) {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/login.php');
}

if (isset($_GET['id'])) {
    $query = $db->query("SELECT id FROM students WHERE id = " . $_GET['id']);
    if (!$query->fetch()){
        header("Location: http://www2.cs.vsu.ru/~glushhenko_v_v/");
        die();
    }
    $query = $db->query("DELETE FROM students WHERE id = " . $_GET['id']);
    header("Location: http://www2.cs.vsu.ru/~glushhenko_v_v/");
} else {
    header("Location: http://www2.cs.vsu.ru/~glushhenko_v_v/");
}