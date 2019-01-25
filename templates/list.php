<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www2.cs.vsu.ru/~glushhenko_v_v/styles/style.css">
    <title>Все анкеты</title>
</head>
<body>

<div class="page_wrap">
    <header>
        <nav>
            <ul>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/" class="active">Все анкеты</a></li>
                <li><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/create.php">Добавить анкету</a></li>
            </ul>
        </nav>
    </header>
    <div class="page-body">
        <div class="body-title">
            <h1>Все анкеты</h1>

            <table>
                <tr>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Серия </th>
                    <th>номер пасспорта</th>
                    <th></th>
                    <th></th>
                </tr>
                    <?php if (isset($students)): ?>
                    <?php $flag = true; ?>
                        <?php foreach ($students as $student): ?>
                            <tr class="<?php echo $flag ? 'green-bg' : ''?>">
                                <td class="<?php echo $flag ? 'green-bg' : ''?>"><a class="link" href="http://www2.cs.vsu.ru/~glushhenko_v_v/read.php?id=<?=$student['id']?>"><?=$student['id']?></a></td>
                                <td><?=$student['name']?></td>
                                <td><?=$student['surname']?></td>
                                <td><?=$student['father_name']?></td>
                                <td><?=$student['document_seria']?></td>
                                <td><?=$student['document_number']?></td>
                                <td><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/update.php?id=<?=$student['id']?>" class="update">обновить</a></td>
                                <td><a href="http://www2.cs.vsu.ru/~glushhenko_v_v/delete.php?id=<?=$student['id']?>" class="delete">удалить</a></td>
                                <?php $flag = !$flag; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>

