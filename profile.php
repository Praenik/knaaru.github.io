<? session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <title>Новости</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>

<? require_once 'templates/nav.php'; ?>

<div class="container">
    <?php
    include_once 'php/db_connect.php';
    $db_table = 'users';
    $query = $db->query("SELECT * FROM $db_table WHERE email='".$_SESSION['email']."'");
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
        echo $_SESSION["error_messages"];
        unset($_SESSION["error_messages"]);
    }
    if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
        echo $_SESSION["success_messages"];
        unset($_SESSION["success_messages"]);
    }
    ?>
    <form class="profile_form" action="php/profile_save.php" method="post" enctype="multipart/form-data">
        <div class="profile_avatar">
            <img class="profile_avatar_img" src="images/users/<?=$user[avatar]?>" alt="Аватар">
            <input class="profile_avatar_input" type="file" accept="image/jpeg, image/png" name="profile_avatar_photo">
        </div>
        <div class="profile_info">
            <div class="profile_info_item">
                <label for="name">Имя</label>
                <input name="name" type="text" autocomplete="off" value="<?=$user[name];?>">
            </div>
            <div class="profile_info_item">
                <label for="nickname">Ник</label>
                <input name="nickname" type="text" autocomplete="off" value="<?=$user[nickname];?>">
            </div>
            <button class="form_submit" name="btn_submit" type="submit" value="Сохранить">Сохранить</button>
        </div>
    </form>
</div>

<? require_once 'templates/footer.php'; ?>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/info-slider.js"></script>

</body>
</html>