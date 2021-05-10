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

    <title>Вход</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>
    <div class="reg_block">
        <div class="container">
            <h1 class="reg_title">вход</h1>
            <div class="reg_error_block">
                <?php
                if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
                    echo $_SESSION["error_messages"];
                    unset($_SESSION["error_messages"]);
                }
                if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
                    echo $_SESSION["success_messages"];
                    unset($_SESSION["success_messages"]);
                }
                ?>
            </div>
            <?php if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])): ?>
            <form class="reg_form" action="php/authorize.php" method="post">
                <div class="reg_label" for="e-mail">E-mail</div>
                <input class="reg_input" name="email" type="email">
                <div class="reg_label" for="password">Пароль</div>
                <input class="reg_input" name="password" type="password">
                <button class="reg_btn" name="reg_btn" type="submit" value="Войти">Войти</button>
            </form>
            <?php else: ?>
            <div id="authorized">
                <h2>Вы уже авторизованы</h2>
            </div>
            <?php endif;?>
            <div class="reg_footer">
                <a href="index.php" class="reg_link">главная</a>
                <a href="reg.php" class="reg_link">зарегистрироваться</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>