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
            <div class="main_table">
                <div class="table_row">
                    <div class="table_headings news_title">Заголовок</div>
                    <div class="table_headings news_text">Текст</div>
                    <div class="table_headings news_date">Дата</div>
                    <div class="table_headings news_author">Автор</div>
                    <div class="table_headings news_category">Категория</div>
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
                </div>
                <? endforeach; ?>
            </div>
            <a class="admin_btn" href="add_news.php">Добавить новость</a>
        </div>
    </main>

    <? require_once 'templates/footer.php' ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>