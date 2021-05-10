<? session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <title>Регистрация</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>
    <div class="reg_block">
        <h1 class="reg_title">регистрация</h1>
        <div class="reg_error_block">
            <?php
            if (isset($_SESSION['error_messages']) && !empty($_SESSION['error_messages'])) {
                echo $_SESSION['error_messages'];
                unset($_SESSION['error_messages']);
            }
            if (isset($_SESSION['success_messages']) && !empty($_SESSION['success_messages'])) {
                echo $_SESSION['success_messages'];
                unset($_SESSION['success_messages']);
            }
            ?>
        </div>
        <? if (!isset($_SESSION['email']) && !isset($_SESSION['password'])): ?>
        <form class="reg_form" action="php/register.php" method="post">
            <div class="reg_label" for="email">E-mail</div>
            <input class="reg_input" name="email" type="email" required>
            <div id="valid_email_message" class="reg_error"></div>
            <div class="reg_label" for="password">Пароль</div>
            <input class="reg_input" name="password" type="password" required>
            <div id="valid_password_message" class="reg_error"></div>
            <div class="reg_label" for="password2">Повторите пароль</div>
            <input class="reg_input" name="password2" type="password" required>
            <div id="valid_password2_message" class="reg_error"></div>
            <button class="reg_btn" name="reg_btn" type="submit" value="Зарегистрироваться">Зарегистрироваться</button>
        </form>
        <? else: ?>
        <div class="reg_label">Вы уже зарегестрированы</div>
        <? endif ?>
        <div class="reg_footer">
            <a href="index.php" class="reg_link">главная</a>
            <a href="auth.php" class="reg_link">войти</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/reg.js"></script>
</body>

</html>