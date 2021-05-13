<?php
session_start();
if (isset($_POST["add_btn"])) {
    include_once '../../php/db_connect.php';
    $db_table = 'news';

    $id = $_GET['id'];
    $query = $db->query("SELECT * FROM $db_table WHERE id=$id");
    $new = $query->fetch[PDO::FETCH_ASSOC];

    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $video = $_POST['video'];

    $path = '../../images/news/';

    if (isset($_FILES['preview'])) {
        $file_name = $_FILES['preview']['name'];
        move_uploaded_file($_FILES['preview']['tmp_name'], $path . $_FILES['preview']['name']);
        $data = array('title' => $title, 'text' => $text, 'author' => $author, 'category' => $category, 'img' => $file_name, 'video' => $video);
        $query = $db->prepare("UPDATE $db_table SET title=:title, text=:text, author=:author, category=:category, img=:img, video=:video WHERE id=$id");
        $query->execute($data);
    } else {
        $data = array('title' => $title, 'text' => $text, 'author' => $author, 'category' => $category, 'video' => $video);
        $query = $db->prepare("UPDATE $db_table SET title=:title, text=:text, author=:author, category=:category, video=:video WHERE id=$id");
        $query->execute($data);
    }


    $_SESSION["success_messages"] = "<p class='success_messages'>Новость обновлена</p>";
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/admin/news.php");

} else {
    exit('Выйди и зайди нормально');
}
