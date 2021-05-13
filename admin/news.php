<? session_start(); ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <title>Панель управления</title>
</head>
<body>
<div class="page">

    <? require_once 'templates/header.php' ?>
    <? require_once 'templates/sidebar.php' ?>

    <main class="main">
        <div class="container">
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
            <a class="admin_btn" href="add_news.php">Добавить новость</a>
            <div class="main_table">
                <div class="table_row">
                    <div class="table_headings news_title">Заголовок</div>
                    <div class="table_headings news_text">Текст</div>
                    <div class="table_headings news_date">Дата</div>
                    <div class="table_headings news_author">Автор</div>
                    <div class="table_headings news_category">Категория</div>
                    <div class="table_headings news_action"></div>
                </div>
                <?php
                include_once '../php/db_connect.php';
                $db_table = 'news';
                $query = $db->query("SELECT id, title, text, date, author, category FROM $db_table ORDER BY id DESC");
                $news = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach ($news as $new):
                    $date = date("d.m.y, G:i", strtotime($new[date]));
                ?>
                <div class="table_row">
                    <div class="news_title"><?=$new[title];?></div>
                    <div class="news_text"><?=$new[text];?></div>
                    <div class="news_date"><?=$date;?></div>
                    <div class="news_author"><?=$new[author];?></div>
                    <div class="news_category"><?=$new[category];?></div>
                    <div class="news_action">
                        <a class="news_action_link" href="edit_news.php?id=<?=$new[id]?>">✎</a>
                        <a class="news_action_link delete" href="php/delete_script.php?id=<?=$new[id];?>">×</a>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
        </div>
    </main>

    <? require_once 'templates/footer.php' ?>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>