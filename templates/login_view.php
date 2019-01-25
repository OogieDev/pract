<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www2.cs.vsu.ru/~glushhenko_v_v/styles/style.css">
    <title>Авторизация</title>
</head>
<body>
        <div class="form-wrapper">
            <form action="http://www2.cs.vsu.ru/~glushhenko_v_v/login.php" method="post">
                <h3>Вход</h3>
                <div class="item">
                    <label for="login">Логин</label>
                    <input id="login" type="text" name="login">
                </div>
                <div class="item">
                    <label for="password">Пароль</label>
                    <input id="password" type="password" name="password">
                </div>
                <button type="submit" class="login-submit">
                    Отправить
                </button>
            </form>
        </div>
        <?php if ($errors) echo $errors ?>

</body>
</html>

