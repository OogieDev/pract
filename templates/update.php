<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www2.cs.vsu.ru/~glushhenko_v_v/styles/style.css">
    <title>Редактировать анкету</title>
</head>
<body>

<div class="page_wrap page_update">
    <header>
        <nav>
            <ul>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/">Все анкеты</a></li>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/create.php">Добавить анкету</a></li>
            </ul>
        </nav>
    </header>
    <div class="page-body">
        <div class="body-title">
            <h1>Редактировать анкету</h1>
            <form action="http://www2.cs.vsu.ru/~glushhenko_v_v/update.php" method="POST">
                <div class="form-row">
                    <input type="text" name="item_id" hidden value="<?=$_GET['id']?>">
                    <div class="form-group">
                        <div class="label">Имя</div>
                        <input style="<?php echo isset($errors['name']) ? 'color: red; border-color: red' : '' ?>" type="text" name="name" placeholder="Имя" value="<?php echo isset($item['name']) ? $item['name'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Фамилия</div>
                        <input style="<?php echo isset($errors['surname']) ? 'color: red; border-color: red' : '' ?>" type="text" name="surname" placeholder="Фамилия" value="<?php echo isset($item['surname']) ? $item['surname'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Отчество</div>
                        <input type="text" name="father_name" placeholder="Отчество" value="<?php echo isset($item['father_name']) ? $item['father_name'] : '' ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label" style="<?php echo isset($errors['sex']) ? 'color: red' : '' ?>">Пол</div>
                        <input type="radio" name="sex" value="male" <?php if ($item['sex'] == "Мужской") echo "checked" ?>> Мужской
                        <input type="radio" name="sex" value="female" <?php if ($item['sex'] == "Женский") echo "checked" ?>> Женский
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Место рождения</div>
                        <input style="<?php echo isset($errors['birth_city']) ? 'color: red; border-color: red' : '' ?>" type="text" name="birth_city" placeholder="Город" value="<?php echo isset($item['birth_city']) ? $item['birth_city'] : '' ?>">
                        <input style="<?php echo isset($errors['birth_region']) ? 'color: red; border-color: red' : '' ?>" type="text" name="birth_region" placeholder="Область" value="<?php echo isset($item['birth_region']) ? $item['birth_region'] : '' ?>">
                        <input style="<?php echo isset($errors['birth_country']) ? 'color: red; border-color: red' : '' ?>" type="text" name="birth_country" placeholder="Страна" value="<?php echo isset($item['birth_country']) ? $item['birth_country'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Дата рождения</div>
                        <input style="<?php echo isset($errors['birth_date']) ? 'color: red; border-color: red' : '' ?>" type="text" name="birth_date" placeholder="дд-мм-гггг" value="<?php echo isset($item['birth_date']) ? $item['birth_date'] : '' ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Адрес регистрации</div>
                        <input type="text" style="<?php echo isset($errors['addr']) ? 'color: red; border-color: red' : '' ?>" name="addr" placeholder="Город.Ул.Дом.Кв." value="<?php echo isset($item['addr']) ? $item['addr'] : '' ?>">
                        <input type="text" style="<?php echo isset($errors['house_index']) ? 'color: red; border-color: red' : '' ?>" name="house_index" placeholder="Индекс" value="<?php echo isset($item['house_index']) ? $item['house_index'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Гражданство</div>
                        <input type="text" style="<?php echo isset($errors['cityzen']) ? 'color: red; border-color: red' : '' ?>" name="cityzen" placeholder="Гражданство" value="<?php echo isset($item['cityzen']) ? $item['cityzen'] : '' ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Вид документа</div>
                        <input type="text" style="<?php echo isset($errors['document_type']) ? 'color: red; border-color: red' : '' ?>" name="document_type" placeholder="Вид документа" value="<?php echo isset($item['document_type']) ? $item['document_type'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Серия</div>
                        <input type="text" style="<?php echo isset($errors['document_seria']) ? 'color: red; border-color: red' : '' ?>" name="document_seria" placeholder="Серия" value="<?php echo isset($item['document_seria']) ? $item['document_seria'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Номер</div>
                        <input type="text" style="<?php echo isset($errors['document_number']) ? 'color: red; border-color: red' : '' ?>" name="document_number" placeholder="Номер" value="<?php echo isset($item['document_number']) ? $item['document_number'] : '' ?>">
                    </div>
                    <br>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Дата выдачи</div>
                        <input type="text" style="<?php echo isset($errors['document_date']) ? 'color: red; border-color: red' : '' ?>" name="document_date" placeholder="Дата выдачи" value="<?php echo isset($item['document_date']) ? $item['document_date'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Кем выдан</div>
                        <input type="text" style="<?php echo isset($errors['document_giver']) ? 'color: red; border-color: red' : '' ?>" name="document_giver" placeholder="Кем выдан" value="<?php echo isset($item['document_giver']) ? $item['document_giver'] : '' ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Телефон</div>
                        <input type="text" style="<?php echo isset($errors['phone']) ? 'color: red; border-color: red' : '' ?>" name="phone" placeholder="Телефон" value="<?php echo isset($item['phone']) ? $item['phone'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">E-mail</div>
                        <input type="text" style="<?php echo isset($errors['email']) ? 'color: red; border-color: red' : '' ?>" name="email" placeholder="e-mail" value="<?php echo isset($item['email']) ? $item['email'] : '' ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Факультет</div>
                        <input type="text" style="<?php echo isset($errors['faculty']) ? 'color: red; border-color: red' : '' ?>" name="faculty" placeholder="Факультет" value="<?php echo isset($item['faculty']) ? $item['faculty'] : '' ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Специальность</div>
                        <input type="text" style="<?php echo isset($errors['speciality']) ? 'color: red; border-color: red' : '' ?>" name="speciality" placeholder="Специальность" value="<?php echo isset($item['speciality']) ? $item['speciality'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <div class="label">Курс</div>
                        <select name="curs" style="<?php echo isset($errors['curs']) ? 'color: red; border-color: red' : '' ?>">
                            <option value="1" <?php if($item['curs'] == 1) echo "selected" ?>>1</option>
                            <option value="2" <?php if($item['curs'] == 2) echo "selected" ?>>2</option>
                            <option value="3" <?php if($item['curs'] == 3) echo "selected" ?>>3</option>
                            <option value="4" <?php if($item['curs'] == 4) echo "selected" ?>>4</option>
                            <option value="5" <?php if($item['curs'] == 5) echo "selected" ?>>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="label">Форма обучения</div>
                        <select name="study_form" style="<?php echo isset($errors['study_form']) ? 'color: red; border-color: red' : '' ?>">
                            <option value="och" <?php if($item['study_form'] == "Очная") echo "selected" ?>>Очная</option>
                            <option value="zaoch" <?php if($item['study_form'] == "Заочная") echo "selected" ?>>Заочная</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="update">Обновить</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

