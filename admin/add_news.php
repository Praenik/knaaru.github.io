<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/add_news.css">
    <title>Панель управления</title>
</head>
<body>
<div class="page">

    <? require_once 'templates/header.php' ?>
    <? require_once 'templates/sidebar.php' ?>

    <main class="main">
        <div class="container">
            <h1 class="add_title">Добавить новость</h1>
            <button class="admin_btn" name="add_btn" type="submit">Добавить новость</button>
            <form class="add_form" action="php/add_script.php" method="post" enctype="multipart/form-data">
                <div class="form_item">
                    <label for="title">Заголовок</label>
                    <input class="form_input" name="title" type="text" required>
                </div>
                <div class="form_item">
                    <label for="text">Текст</label>
                    <input class="form_input" name="text" type="text" required>
                </div>
                <div class="form_item">
                    <label for="author">Автор</label>
                    <select class="form_input" name="author" required>
                        <option value="Сейрандра">Сейрандра</option>
                        <option value="Хендис">Хендис</option>
                    </select>
                </div>
                <div class="form_item">
                    <label for="category">Категория</label>
                    <select class="form_input" name="category">
                        <option selected disabled>Выберите категорию</option>
                        <option value="рейд">рейд</option>
                        <option value="ачивки">ачивки</option>
                    </select>
                </div>
                <div class="form_item">
                    <label for="preview">Обложка</label>
                    <input class="form_input" type="file" name="preview" accept="image/jpeg, image/png">
                </div>
            </form>
        </div>
    </main>

    <? require_once 'templates/footer.php' ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>