<?php
session_start();
if (isset($_POST["add_btn"])) {
    include_once '../../php/db_connect.php';
    $db_table = 'news';

    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $video = $_POST['video'];
    $date = date("Y-m-d H:i:s");

    $path = '../../images/news/';

    if (isset($_FILES['preview'])) {
        $file_name = $_FILES['preview']['name'];
        move_uploaded_file($_FILES['preview']['tmp_name'], $path . $_FILES['preview']['name']);
        $data = array('title' => $title, 'text' => $text, 'author' => $author, 'category' => $category, 'date' => $date, 'img' => $file_name, 'video' => $video);
        $query = $db->prepare("INSERT INTO $db_table (title, text, author, category, `date`, img, video) VALUES (:title, :text, :author, :category, :date, :img, :video)");
        $query->execute($data);
    } else {
        $data = array('title' => $title, 'text' => $text, 'author' => $author, 'category' => $category, 'date' => $date, 'video' => $video);
        $query = $db->prepare("INSERT INTO $db_table (title, text, author, category, `date`, video) VALUES (:title, :text, :author, :category, :date, :video)");
        $query->execute($data);
    }


    $_SESSION["success_messages"] = "<p class='success_messages'>Новость добавлена</p>";
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$address_site."/admin/news.php");

} else {
    exit('Выйди и зайди нормально');
}
