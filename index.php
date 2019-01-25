<?php


//этот файл будет запускаться если мы не будем указывать
require_once "db.php";
$db = DataBaseManager::getInstance();

if (!isset($_COOKIE['logged'])) {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/login.php');
}

if (!isset($_GET['table'])){
    $res = $db->query("SELECT * FROM students");
    $students = array();
    while ($row = $res->fetch()){
        $students[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'surname' => $row['surname'],
            'father_name' => $row['father_name'],
            'document_seria' => $row['document_seria'],
            'document_number' => $row['document_number'],
        );
    }

    require_once "templates/list.php";

}
