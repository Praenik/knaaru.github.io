<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/news.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <title>Новости</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>

<?php
$title = $_POST['test_title'];
$text = $_POST['test_text'];
$date = date("y.m.d");
$author = $_POST['test_author'];
$category = $_POST['test_category'];

include "php/db_connect.php";
$db_table = "gen_news";

$data = array('title' => $title, 'text' => $text, 'date' => $date, 'author' => $author, 'category' => $category);

$query = $db->prepare("INSERT INTO $db_table (title, text, date, author, category) VALUES (:title, :text, :date, :author, :category)");
$result = $query->execute($data);
require_once 'templates/nav.php'
?>

<div class="news">
    <div class="container">
        <div class="news_block">
            <div class="news_content">
                <h2 class="news_title"><?=$title;?></h2>
                <p><?=$text;?></p>
            </div>
            <div class="news_footer">
                <ul class="news_list" type="none">
                    <li class="news_list_item">
                        <time datetime="2021-12-31 19:21">
                            <?=date("d.m.y");?>
                        </time>
                    </li>
                    <li class="news_list_item"><?=$author?></li>
                    <li class="news_list_item"><?=$category?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>

</body>

</html>