<?php
require_once "db.php";
$db = DataBaseManager::getInstance();

if (!isset($_COOKIE['logged'])) {
    header('Location: http://www2.cs.vsu.ru/~glushhenko_v_v/login.php');
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = array();


    if (!isset($_POST['name']) || empty($_POST['name'])){
        $errors['name'] = "Имя обязательно для заполнения!";
    }
    if (!isset($_POST['surname']) || empty($_POST['surname'])){
        $errors['surname'] = "Фамилия обязательна для заполнения!";
    }
    if (!isset($_POST['sex']) || empty($_POST['sex'])){
        $errors['sex'] = "Пол обязателен для заполнения!";
    }
    if (!isset($_POST['father_name']) || empty($_POST['father_name'])){
        $errors['father_name'] = "Имя обязательно для заполнения!";
    }
    if (!isset($_POST['birth_date']) || empty($_POST['birth_date'])){
        $errors['birth_date'] = "Дата рождения обязательна для заполнения!";
    }
    if (!isset($_POST['birth_city']) || empty($_POST['birth_city'])){
        $errors['birth_city'] = "Город обязателен для заполнения!";
    }
    if (!isset($_POST['birth_region']) || empty($_POST['birth_region'])){
        $errors['birth_region'] = "Область обязательна для заполнения!";
    }
    if (!isset($_POST['birth_country']) || empty($_POST['birth_country'])){
        $errors['birth_country'] = "Страна обязательна для заполнения!";
    }
    if (!isset($_POST['cityzen']) || empty($_POST['cityzen'])){
        $errors['cityzen'] = "Гражданство обязательно для заполнения!";
    }
    if (!isset($_POST['addr']) || empty($_POST['addr'])){
        $errors['addr'] = "Адресс обязателен для заполнения!";
    }
    if (!isset($_POST['house_index']) || empty($_POST['house_index'])){
        $errors['house_index'] = "Индекс обязателен для заполнения!";
    }
    if (!isset($_POST['phone']) || empty($_POST['phone'])){
        $errors['phone'] = "Телефон обязателен для заполнения!";
    }
    if (!isset($_POST['email']) || empty($_POST['email'])){
        $errors['email'] = "E-mail обязателен для заполнения!";
    }
    if (!isset($_POST['document_type']) || empty($_POST['document_type'])){
        $errors['document_type'] = "Тип документа обязателен для заполнения!";
    }
    if (!isset($_POST['document_seria']) || empty($_POST['document_seria'])){
        $errors['document_seria'] = "Серия документа обязателен для заполнения!";
    }
    if (!isset($_POST['document_number']) || empty($_POST['document_number'])){
        $errors['document_number'] = "Номер документа обязателен для заполнения!";
    }
    if (!isset($_POST['document_date']) || empty($_POST['document_date'])){
        $errors['document_date'] = "Дата выдачи документа обязательна для заполнения!";
    }
    if (!isset($_POST['document_giver']) || empty($_POST['document_giver'])){
        $errors['document_giver'] = "Кем выдан документ обязательно для заполнения!";
    }
    if (!isset($_POST['faculty']) || empty($_POST['faculty'])){
        $errors['faculty'] = "Факультет обязателен для заполнения!";
    }
    if (!isset($_POST['speciality']) || empty($_POST['speciality'])){
        $errors['speciality'] = "Направление обязателен для заполнения!";
    }
    if (!isset($_POST['curs']) || empty($_POST['curs'])){
        $errors['curs'] = "Курс обязателен для заполнения!";
    }
    if (!isset($_POST['study_form']) || empty($_POST['study_form'])){
        $errors['study_form'] = "Форма обучения обязательна для заполнения!";
    }

    if (!$errors){
        $sex = "";
        if ($_POST['sex'] == "male") {
            $sex = "Мужской";
        } else {
            $sex = "Женский";
        }
        $study_form = "";
        if ($_POST['study_form'] == "och") {
            $study_form = "Очная";
        } else {
            $study_form = "Заочная";
        }



        $sql = $db->prepare("INSERT INTO students (name, surname, father_name, sex, birth_date, birth_city, birth_region, birth_country, cityzen, addr, house_index, phone, email, document_type, document_seria, document_number, document_date, document_giver, faculty, speciality, curs, study_form) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        if (!$sql) {
          echo "\nPDO::errorInfo():\n";
          print_r($db->errorInfo());
        }
        $sql->execute(array($_POST['name'], $_POST['surname'], $_POST['father_name'], $sex, $_POST['birth_date'], $_POST['birth_city'], $_POST['birth_region'], $_POST['birth_country'], $_POST['cityzen'], $_POST['addr'], $_POST['house_index'], $_POST['phone'], $_POST['email'], $_POST['document_type'], $_POST['document_seria'], $_POST['document_number'], $_POST['document_date'], $_POST['document_giver'], $_POST['faculty'], $_POST['speciality'], $_POST['curs'], $_POST['study_form']));
        header("Location: http://www2.cs.vsu.ru/~glushhenko_v_v/");
    } else {
        require_once "templates/create_form.php";
    }
} else {
    require_once "templates/create_form.php";
}

