<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link rel="stylesheet" href="css/news.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <title>Новости</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
</head>

<body>

    <form action="test_generate.php" method="post" autocomplete="off">
        <lable>title</lable>
        <input name="test_title" type="text">
        <br>
        <lable>text</lable>
        <input name="test_text" type="text">
        <br>
        <lable>author</lable>
        <select name="test_author" id="">
            <option value="Хендис">Хендис</option>
            <option value="Сейрандра">Сейранда</option>
        </select>
        <br>
        <lable>category</lable>
        <select name="test_category" id="">
            <option value="рейд">рейд</option>
            <option value="ачивка">ачивка</option>
        </select>
        <br>
        <button type="submit">gen</button>
    </form>

</body>

</html>