<? session_start(); ?>

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

    <?php
    require_once 'templates/header.php';
    require_once 'templates/sidebar.php';
    include_once '../php/db_connect.php';
    $db_table = 'news';

    $id = $_GET['id'];
    $query = $db->query("SELECT * FROM $db_table WHERE id=$id");
    $new = $query->fetch(PDO::FETCH_ASSOC);
    ?>

    <main class="main">
        <div class="container">
            <h1 class="add_title">Изменить новость</h1>
            <form class="add_form" action="php/edit_script.php?id=<?=$id;?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr class="form_item">
                        <td class="td_left">
                            <label for="title">Заголовок</label>
                        </td>
                        <td class="td_right">
                            <input class="form_input" name="title" type="text" value="<?=$new[title];?>" autocomplete="off" required placeholder="Введите заголовок">
                        </td>
                    </tr>
                    <tr class="form_item">
                        <td class="td_left">
                            <label for="text">Текст</label>
                        </td>
                        <td class="td_right">
                            <textarea class="form_input" name="text" placeholder="Введите текст" data-autoresize required><?=$new[text];?></textarea>
                        </td>
                    </tr>
                    <tr class="form_item">
                        <td class="td_left">
                            <label for="author">Автор</label>
                        </td>
                        <td class="td_right">
                            <select class="form_input" name="author" required>
                                <option value="Сейрандра">Сейрандра</option>
                                <option value="Хендис">Хендис</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="form_item">
                        <td class="td_left">
                            <label for="category">Категория</label>
                        </td>
                        <td class="td_right">
                            <select class="form_input" name="category">
                                <option value="рейд" id="category">рейд</option>
                                <option value="ачивки" id="category">ачивки</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="form_item">
                        <td class="td_left">
                            <label for="preview">Обложка</label>
                        </td>
                        <td class="td_right">
                            <input class="form_input" type="file" name="preview" accept="image/jpeg, image/png">
                        </td>
                    </tr>
                    <tr class="form_item">
                        <td class="td_left"><label for="text">Видео</label></td>
                        <td class="td_right"><textarea class="form_input" data-autoresize name="video" type="text" placeholder="Видео"><?=$new[video];?></textarea></td>
                    </tr>
                </table>
                <button class="admin_btn" name="add_btn" type="submit">Сохранить</button>
            </form>
        </div>
    </main>

    <? require_once 'templates/footer.php' ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/app.js"></script>
<script src="../js/textarea.js"></script>

<script>
    $(document).ready( () => {
        $('option[value=<?=$new[category];?>]').attr('selected', 'selected')
        $('option[value=<?=$new[author];?>]').attr('selected', 'selected')
    })
</script>
</body>
</html>

