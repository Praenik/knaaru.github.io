<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/news.css">
    <title>Панель управления</title>
</head>
<body>
<div class="page">

    <? require_once 'templates/header.php' ?>
    <? require_once 'templates/sidebar.php' ?>

    <main class="main">
        <div class="container">
            <h1 class="add_title">Добавить новость</h1>
            <form class="add_form" action="php/add_script.php" method="post" enctype="multipart/form-data">
                <table>
                <tr class="form_item">
                    <td class="td_left"><label for="title">Заголовок</label></td>
                    <td class="td_right"><input class="form_input" name="title" type="text" autocomplete="off" required placeholder="Введите заголовок"></td>
                </tr>
                <tr class="form_item">
                    <td class="td_left"><label for="text">Текст</label></td>
                    <td class="td_right">
                        <div id="toolbar-container"></div>
                        <div id="editor">
                            <p>Текст новости</p>
                        </div>
                        <textarea class="form_input dn" data-autoresize name="text" required placeholder="Введите текст"></textarea>
                    </td>
                </tr>
                <tr class="form_item">
                    <td class="td_left"><label for="author">Автор</label></td>
                    <td class="td_right"><select class="form_input" name="author" required>
                        <option value="Сейрандра">Сейрандра</option>
                        <option value="Хендис">Хендис</option>
                    </select></td>
                </tr>
                <tr class="form_item">
                    <td class="td_left"><label for="category">Категория</label></td>
                    <td class="td_right"><select class="form_input" name="category">
                        <option selected disabled>Выберите категорию</option>
                        <option value="рейд">рейд</option>
                        <option value="ачивки">ачивки</option>
                    </select></td>
                </tr>
                <tr class="form_item">
                    <td class="td_left"><label for="preview">Обложка</label></td>
                    <td class="td_right"><input class="form_input" type="file" name="preview" accept="image/jpeg, image/png"></td>
                </tr>
                <tr class="form_item">
                    <td class="td_left"><label for="text">Видео</label></td>
                    <td class="td_right"><textarea class="form_input" data-autoresize name="video" placeholder="Видео"></textarea></td>
                </tr>
                </table>
                <button class="admin_btn" name="add_btn" type="submit">Добавить новость</button>
            </form>


        </div>
    </main>

    <? require_once 'templates/footer.php' ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/decoupled-document/ckeditor.js"></script>
<script src="js/app.js"></script>
<script src="js/format_text.js"></script>
<script src="../js/textarea.js"></script>
</body>
</html>

