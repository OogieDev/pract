<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www2.cs.vsu.ru/~glushhenko_v_v/styles/style.css">
    <title>Добавить анкету</title>
</head>
<body>

<div class="page_wrap">
    <header>
        <nav>
            <ul>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/">Все анкеты</a></li>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/create.php" class="active">Добавить анкету</a></li>
            </ul>
        </nav>
    </header>
    <div class="page-body">
        <div class="body-title">
            <h1>Добавить анкету</h1>
            <form action="http://www2.cs.vsu.ru/~glushhenko_v_v/create.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Имя</div>
                        <input style="<?php echo isset($errors['name']) ? 'color: red; border-color: red' : '' ?>" type="text" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" name="name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <div class="label">Фамилия</div>
                        <input style="<?php echo isset($errors['surname']) ? 'color: red; border-color: red' : '' ?>" type="text" value="<?php echo isset($_POST['surname']) ? $_POST['surname'] : '' ?>" name="surname" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <div class="label">Отчество</div>
                        <input type="text" name="father_name" value="<?php echo isset($_POST['father_name']) ? $_POST['father_name'] : '' ?>" placeholder="Отчество">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label" style="<?php echo isset($errors['sex']) ? 'color: red' : '' ?>">Пол</div>
                        <?php if(isset($_POST['sex']) && $_POST['sex'] == "male"): ?>
                        <input type="radio" checked="checked" name="sex" value="male"> Мужской
                        <input type="radio" name="sex" value="female"> Женский
                        <?php elseif(isset($_POST['sex']) && $_POST['sex'] == "female"): ?>
                        <input type="radio" name="sex" value="male"> Мужской
                        <input type="radio" checked="checked" name="sex" value="female"> Женский
                        <?php else: ?>
                        <input type="radio" name="sex" value="male"> Мужской
                        <input type="radio" name="sex" value="female"> Женский
                        <?php endif ?>
                        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Место рождения</div>
                        <input style="<?php echo isset($errors['birth_city']) ? 'color: red; border-color: red' : '' ?>" type="text" value="<?php echo isset($_POST['birth_city']) ? $_POST['birth_city'] : '' ?>" name="birth_city" placeholder="Город">
                        <input style="<?php echo isset($errors['birth_region']) ? 'color: red; border-color: red' : '' ?>" type="text" value="<?php echo isset($_POST['birth_region']) ? $_POST['birth_region'] : '' ?>" name="birth_region" placeholder="Область">
                        <input style="<?php echo isset($errors['birth_country']) ? 'color: red; border-color: red' : '' ?>" type="text" value="<?php echo isset($_POST['birth_country']) ? $_POST['birth_country'] : '' ?>" name="birth_country" placeholder="Страна">
                    </div>
                    <div class="form-group">
                        <div class="label">Дата рождения</div>
                        <input style="<?php echo isset($errors['birth_date']) ? 'color: red; border-color: red' : '' ?>" type="text"  value="<?php echo isset($_POST['birth_date']) ? $_POST['birth_date'] : '' ?>" name="birth_date" placeholder="дд-мм-гггг">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Адрес регистрации</div>
                        <input type="text" style="<?php echo isset($errors['addr']) ? 'color: red; border-color: red' : '' ?>"  value="<?php echo isset($_POST['addr']) ? $_POST['addr'] : '' ?>" name="addr" placeholder="Город.Ул.Дом.Кв.">
                        <input type="text" style="<?php echo isset($errors['house_index']) ? 'color: red; border-color: red' : '' ?>"  value="<?php echo isset($_POST['house_index']) ? $_POST['house_index'] : '' ?>" name="house_index" placeholder="Индекс">
                    </div>
                    <div class="form-group">
                        <div class="label">Гражданство</div>
                        <input type="text" style="<?php echo isset($errors['cityzen']) ? 'color: red; border-color: red' : '' ?>"  value="<?php echo isset($_POST['cityzen']) ? $_POST['cityzen'] : '' ?>" name="cityzen" placeholder="Гражданство">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Вид документа</div>
                        <input type="text" style="<?php echo isset($errors['document_type']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['document_type']) ? $_POST['document_type'] : '' ?>" name="document_type" placeholder="Вид документа">
                    </div>
                    <div class="form-group">
                        <div class="label">Серия</div>
                        <input type="text" style="<?php echo isset($errors['document_seria']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['document_seria']) ? $_POST['document_seria'] : '' ?>" name="document_seria" placeholder="Серия">
                    </div>
                    <div class="form-group">
                        <div class="label">Номер</div>
                        <input type="text" style="<?php echo isset($errors['document_number']) ? 'color: red; border-color: red' : '' ?> value="<?php echo isset($_POST['document_number']) ? $_POST['document_number'] : '' ?>"" name="document_number" placeholder="Номер">
                    </div>
                    <br>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Дата выдачи</div>
                        <input type="text" style="<?php echo isset($errors['document_date']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['document_date']) ? $_POST['document_date'] : '' ?>" name="document_date" placeholder="Дата выдачи">
                    </div>
                    <div class="form-group">
                        <div class="label">Кем выдан</div>
                        <input type="text" style="<?php echo isset($errors['document_giver']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['document_giver']) ? $_POST['document_giver'] : '' ?>" name="document_giver" placeholder="Кем выдан">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Телефон</div>
                        <input type="text" style="<?php echo isset($errors['phone']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" name="phone" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <div class="label">E-mail</div>
                        <input type="text" style="<?php echo isset($errors['email']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" name="email" placeholder="e-mail">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Факультет</div>
                        <input type="text" style="<?php echo isset($errors['faculty']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['faculty']) ? $_POST['faculty'] : '' ?>" name="faculty" placeholder="Факультет">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="label">Специальность</div>
                        <input type="text" style="<?php echo isset($errors['speciality']) ? 'color: red; border-color: red' : '' ?>" value="<?php echo isset($_POST['speciality']) ? $_POST['speciality'] : '' ?>" name="speciality" placeholder="Специальность">
                    </div>
                    <div class="form-group">
                        <div class="label">Курс</div>
                        <select name="curs" style="<?php echo isset($errors['curs']) ? 'color: red; border-color: red' : '' ?>">
                        <?php if(isset($_POST['curs']) && $_POST['curs'] == "1"): ?>
                        <option value="1" selected="selected">1</option>
                        <?php else: ?>
                        <option value="1">1</option>
                        <?php endif ?>    
                        <?php if(isset($_POST['curs']) && $_POST['curs'] == "2"): ?>
                        <option value="2" selected="selected">2</option>
                        <?php else: ?>
                        <option value="2">2</option>
                        <?php endif ?>    
                        <?php if(isset($_POST['curs']) && $_POST['curs'] == "3"): ?>
                        <option value="3" selected="selected">3</option>
                        <?php else: ?>
                        <option value="3">3</option>
                        <?php endif ?>    
                        <?php if(isset($_POST['curs']) && $_POST['curs'] == "4"): ?>
                        <option value="4" selected="selected">4</option>
                        <?php else: ?>
                        <option value="4">4</option>
                        <?php endif ?>    
                        <?php if(isset($_POST['curs']) && $_POST['curs'] == "5"): ?>
                        <option value="5" selected="selected">5</option>
                        <?php else: ?>
                        <option value="5">5</option>
                        <?php endif ?>    
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="label">Форма обучения</div>
                        <select name="study_form" style="<?php echo isset($errors['study_form']) ? 'color: red; border-color: red' : '' ?>">
                        <?php if(isset($_POST['study_form']) && $_POST['study_form'] == "och"): ?>
                        <option value="och" selected="selected">Очная</option>
                        <?php else: ?>
                        <option value="och">Очная</option>
                        <?php endif ?>    
                        <?php if(isset($_POST['study_form']) && $_POST['study_form'] == "zaoch"): ?>
                        <option value="zaoch" selected="selected">Заочная</option>
                        <?php else: ?>
                        <option value="zaoch">Заочная</option>
                        <?php endif ?>        
                        </select>
                    </div>
                </div>
                <button type="submit" class="add">Добавить</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

