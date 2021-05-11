<?php
if (isset($_POST["add_btn"])) {
    include_once '../../php/db_connect.php';
    $db_table = 'news';

    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $date = date("Y-m-d H:i:s");

    $path = '../../images/news/';

    $data_id = array('title' => $title, 'text' => $text);

    if (isset($_FILES['preview'])) {
//        $query_id = $db->prepare("SELECT id FROM $db_table ORDER BY id DESC LIMIT 1");
//        $id = $query_id->execute($data_id);
//        $ext = explode(".", $_FILES['preview']['name'])[1];
        $file_name = $_FILES['preview']['name'];
        move_uploaded_file($_FILES['preview']['tmp_name'], $path . $_FILES['preview']['name']);
        $data = array('title' => $title, 'text' => $text, 'author' => $author, 'category' => $category, 'date' => $date, 'img' => $file_name);
        $query = $db->prepare("INSERT INTO $db_table (title, text, author, category, `date`, img) VALUES (:title, :text, :author, :category, :date, :img)");
        $query->execute($data);
    } else {
        $data = array('title' => $title, 'text' => $text, 'author' => $author, 'category' => $category, 'date' => $date);
        $query = $db->prepare("INSERT INTO $db_table (title, text, author, category, `date`) VALUES (:title, :text, :author, :category, :date)");
        $query->execute($data);
    }

} else {
    exit('Выйди и зайди нормально');
}
