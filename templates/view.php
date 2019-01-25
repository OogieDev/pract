<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www2.cs.vsu.ru/~glushhenko_v_v/styles/style.css">
    <title>Просмотр анкеты</title>
</head>
<body>

<div class="page_wrap view">
    <header>
        <nav>
            <ul>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/">Все анкеты</a></li>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/create.php" class="active">Добавить анкету</a></li>
            </ul>
        </nav>
    </header>
    <div class="page-body">
        <?php if(isset($errors)): ?>
            <pre>
                <?php print_r($errors) ?>
            </pre>
        <?php endif; ?>
        <div class="body-title">
            <h1>Анкета № <?php echo isset($item['id']) ? $item['id'] : '' ?></h1>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Имя</div>
                        <p class="val"><?php echo isset($item['name']) ? $item['name'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Фамилия</div>
                        <p class="val"><?php echo isset($item['surname']) ? $item['surname'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Отчество</div>
                        <p class="val"><?php echo isset($item['father_name']) ? $item['father_name'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label" style="<?php echo isset($errors['sex']) ? 'color: red' : '' ?>">Пол</div>
                        <p class="val"><?php echo isset($item['sex']) ? $item['sex'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Место рождения</div>
                        <p class="val"><?php echo isset($item['birth_city']) ? $item['birth_city'] : '' ?></p>
                        <p class="val"><?php echo isset($item['birth_region']) ? $item['birth_region'] : '' ?> обл.</p>
                        <p class="val"><?php echo isset($item['birth_country']) ? $item['birth_country'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Дата рождения</div>
                        <p class="val"><?php echo isset($item['birth_date']) ? $item['birth_date'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Адрес регистрации</div>
                        <p class="val"><?php echo isset($item['addr']) ? $item['addr'] : '' ?></p>
                        <p class="val"><?php echo isset($item['house_index']) ? $item['house_index'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Дата рождения</div>
                        <p class="val"><?php echo isset($item['cityzen']) ? $item['cityzen'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Вид документа</div>
                        <p class="val"><?php echo isset($item['document_type']) ? $item['document_type'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Серия</div>
                        <p class="val"><?php echo isset($item['document_seria']) ? $item['document_seria'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Номер</div>
                        <p class="val"><?php echo isset($item['document_number']) ? $item['document_number'] : '' ?></p>
                    </div>
                    <br>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Дата выдачи</div>
                        <p class="val"><?php echo isset($item['document_date']) ? $item['document_date'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Кем выдан</div>
                        <p class="val"><?php echo isset($item['document_giver']) ? $item['document_giver'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Телефон</div>
                        <p class="val"><?php echo isset($item['phone']) ? $item['phone'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">E-mail</div>
                        <p class="val"><?php echo isset($item['email']) ? $item['email'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Факультет</div>
                        <p class="val"><?php echo isset($item['faculty']) ? $item['faculty'] : '' ?></p>
                    </div>
                    <div class="form-group">
                        <div class="label">Курс</div>
                        <p class="val"><?php echo isset($item['curs']) ? $item['curs'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Специальность</div>
                        <p class="val"><?php echo isset($item['speciality']) ? $item['speciality'] : '' ?></p>
                    </div>

                    <div class="form-group">
                        <div class="label">Форма обучения</div>
                        <p class="val">
                            <?php if (isset($item['study_form'])): ?>
                                <?php if($item['study_form'] == 'och'): ?>
                                    Очная
                                <?php elseif($item['study_form'] == 'zaoch'): ?>
                                    Заочная
                                <?php endif ?>    
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            <div class="update_wrap">
                <a href="http://www2.cs.vsu.ru/~glushhenko_v_v/update.php?id=<?=$item['id']?>" class="update">Изменить</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>

